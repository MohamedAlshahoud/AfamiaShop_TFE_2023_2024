<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\Orders;
use App\Entity\Product;
use App\Entity\User;
use App\Security\EmailVerifier;
use App\Repository\OrderRepository;
use App\Repository\OrdersRepository;
use App\Services\CartServices;
use App\Services\EmailOrderConfirmation;
use Doctrine\ORM\EntityManagerInterface;
use Stripe\Checkout\Session;
use Symfony\Component\Mime\Address;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Stripe\Stripe;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class PaymentController extends AbstractController
{

    private EntityManagerInterface $entityManagerInterface;
    private UrlGeneratorInterface $urlGeneratorInterface;
    private EmailOrderConfirmation $emailOrderConfirmation;
    private EmailVerifier $emailVerifier;

    public function __construct(EntityManagerInterface $entityManagerInterface, UrlGeneratorInterface $urlGeneratorInterface, EmailOrderConfirmation $emailOrderConfirmation, EmailVerifier $emailVerifier)
    {
        $this->entityManagerInterface = $entityManagerInterface;
        $this->urlGeneratorInterface = $urlGeneratorInterface;
        $this->emailOrderConfirmation = $emailOrderConfirmation;
        $this->emailVerifier = $emailVerifier;
    }
    
    #[Route('/order/create-session-stripe/{reference}', name: 'payment_stripe')]
    public function index($reference, OrderRepository $orderRepository): RedirectResponse
    {

        $productStripe = [];

        $order = $orderRepository->findOneBy(['reference' => $reference]);

        if (!$order){
            return $this->redirectToRoute("app_cart");
        }

        foreach ($order->getOrderDetails()->getValues() as $product){
            
            $productData = $this->entityManagerInterface->getRepository(Product::class)->findOneBy(['name' => $product->getProduct()]);
            $productStripe[] = [
                'price_data' => [
                    'currency' => 'eur',
                    'unit_amount' => $productData->getPrice(),
                    'product_data' => [
                        'name' => $product->getProduct()
                    ]
                ],
                'quantity' => $product->getQuantity(),
            ];
        }
        
        $productStripe[] = [
            'price_data' => [
                'currency' => 'eur',
                'unit_amount' => $order->getTransporterPrice(),
                'product_data' => [
                    'name' => $order->getTransporterName()
                ]
            ],
            'quantity' => 1,
        ];

        Stripe::setApiKey('sk_test_51Mxb2LKGXbHS8qzzXWo2j1olbqM4xAGpZXmSFp3q8VrHHCleryEIJo4zTcmEsDo9udrNlrwp74kcl5zdxARxKR5R00s9ebJvm8');

        $YOUR_DOMAIN = 'http://localhost:8000';
        $checkout_session = Session::create([
            'customer_email' => $this->getUser()->getEmail(),
            'payment_method_types' => ['card'],
            'line_items' => [[
                $productStripe
            ]],
            'mode' => 'payment',
            'success_url' => $this->urlGeneratorInterface->generate('payment_success', [
                'reference' => $order->getReference()
            ], UrlGeneratorInterface::ABSOLUTE_URL),
            'cancel_url' => $this->urlGeneratorInterface->generate('payment_error', ['reference' => $order->getReference()],
            UrlGeneratorInterface::ABSOLUTE_URL)
        ]);
        //$order->setStripeSessionId($checkout_session->id);

        $this->entityManagerInterface->flush();

        return new RedirectResponse($checkout_session->url);
    }


    #[Route('/order/success/{reference}', name:'payment_success')]
    public function stripeSuccess(CartServices $cartServices, EntityManagerInterface $manager, Request $request, $reference): Response
    {
        $order = $this->entityManagerInterface->getRepository(Order::class)->findOneBy(['reference' => $reference]);
        if(!$order || $order->getUser() !== $this->getUser()){
            return $this->redirectToRoute('/cart');
        }
        if(!$order->isIsPaid()){
            $cartServices->clearCart();
            $order->setIsPaid(1);
            $this->entityManagerInterface->flush();
        }

        // Calculer le montant total de la commande
        $totalAmount = 0;
        foreach ($order->getOrderDetails()->getValues() as $product) {
            $totalAmount += $product->getPrice() * $product->getQuantity();
        }
        $totalAmount += $order->getTransporterPrice();
        
        return $this->render('payment/success.html.twig', [
            'order' => $order,
            'totalAmount' => $totalAmount,
        ]);
    }

    #[Route('/order/error/{reference}', name:'payment_error')]
    public function paymentcancel($reference): Response
    {
        $order = $this->entityManagerInterface->getRepository(Order::class)->findOneBy(['reference' => $reference]);
        
        if(!$order || $order->getUser() !== $this->getUser()){
            return $this->redirectToRoute('app_cart');
        }
        
        return $this->render('payment/error.html.twig', [
            'order' => $order,
        ]);
    }
    
}





