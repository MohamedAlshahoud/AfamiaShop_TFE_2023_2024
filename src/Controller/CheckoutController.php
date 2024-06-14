<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Entity\OrderDetails;
use App\Entity\Orders;
use App\Entity\Transporter;
use App\Form\CheckoutType;
use App\Repository\AddressRepository;
use App\Repository\TransporterRepository;
use App\Services\CartServices;
use App\Services\OrderServices;
use App\Services\Stripe;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;

class CheckoutController extends AbstractController
{
    private $session;

    public function __construct(
        private CartServices $cartServices,
        private RequestStack $requestStack,
        private TransporterRepository $transporterRepository,
        private EntityManagerInterface $entityManagerInterface,
    )
    {
        $this->cartServices = $cartServices;
        $this->session = $requestStack->getSession();
        $this->entityManagerInterface = $entityManagerInterface;
    }

    #[Route('/order/create', name: 'order_create')]
    public function index(Request $request, CartServices $cartServices): Response
    {
        $user = $this->getUser();    
        $cart = $this->cartServices->getCartDetails();

        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

        if(!count($cart["items"])){
            return $this->redirectToRoute("app_home");
        }

        if(!$user){
            $this->session->set("next", "order_create");
            return $this->redirectToRoute("app_login");
        }

        

        $form = $this->createForm(CheckoutType::class, null, ['user'=>$this->getUser()]);

        return $this->render('checkout/index.html.twig', [
            'form' => $form->createView(),
            'cart' => $cart,
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/order/verify', name: 'order_prepare', methods:['POST'])]
    public function prepareOrder(Request $request, CartServices $cartServices):Response{   

        if(!$this->getUser()){
            return $this->redirectToRoute('app_login');
        }

        $cart = $this->cartServices->getCartDetails();
        $form = $this->createForm(CheckoutType::class, null, ['user'=>$this->getUser()]);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon
            $datetime = new \DateTime('now');
            $transporter = $form->get('transporter')->getData();
            $delivery = $form->get('address')->getData();
            $subTotalWithTransporter = $cart["sub_total"]+$transporter->getPrice();
            $deliveryForOrder = $delivery->getFirstName() . ' ' .$delivery->getLastName();
            $deliveryForOrder .= ' : ' . $delivery->getPhone();
            $deliveryForOrder .= ' _' . $delivery->getAddress();
            $deliveryForOrder .= ' , ' . $delivery->getCodePostal() . '  ' .$delivery->getCity();
            $deliveryForOrder .= ' - ' . $delivery->getCountry();

            $order = new Order();
            $reference = $datetime->format('dmY') . '-' . uniqid();
            $order->setUser($this->getUser());
            $order->setReference($reference);
            $order->setCreatedAt($datetime);
            $order->setDeliveryAddress($deliveryForOrder);
            $order->setOrderCost($cart["sub_total_htva"]);
            $order->setTva($cart["tva"]);
            $order->setOrderCostTtc($subTotalWithTransporter);
            $order->setTransporterName($transporter->getName());
            $order->setTransporterPrice($transporter->getPrice());
            $order->setQuantity($cart['quantity']);
            $order->setIsPaid(0);
            $order->setMethod('stripe');

            $this->entityManagerInterface->persist($order);

            foreach ($cart["items"] as $key => $item)
            {
                $product = $item["product"];

                $orderDetail = new OrderDetail();
                $orderDetail->setOrderProduct($order);
                $orderDetail->setQuantity($item['quantity']);
                $orderDetail->setPrice($product['price']);
                $orderDetail->setSubtotal($item['sub_total']);
                $orderDetail->setProduct($product['name']);

                $this->entityManagerInterface->persist($orderDetail);
            }

            $this->entityManagerInterface->flush();
            return $this->render('checkout/confirm.html.twig', [
                'method' =>$order->getMethod(),
                'cart' => $cart,
                'transporter' => $transporter,
                'delivery' => $deliveryForOrder,
                'subTotalWithTransporter' => $subTotalWithTransporter,
                'reference' => $order->getReference(),
                'quantity' => $cartDetails['quantity']
            ]);
        }

        return $this->redirectToRoute('app_cart');
    }

    #[Route('/order/get-transporter-price/{id}', name: 'get_transporter_price', methods:['GET'])]
    public function getTransporterPrice(Transporter $transporter): Response
    {
        return new Response($transporter->getPrice());
    }
    
}
