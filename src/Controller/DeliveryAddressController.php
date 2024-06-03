<?php

namespace App\Controller;

use App\Form\CheckoutType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Repository\AddressRepository;
use App\Services\CartServices;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DeliveryAddressController extends AbstractController
{

    private $session;

    public function __construct(
        
        private CartServices $cartServices,
        private RequestStack $requestStack,
    )
    {

        $this->cartServices = $cartServices;
        $this->session = $requestStack->getSession();
    }

    #[Route('/checkoutttt', name: 'checkouttttt')]
    public function index(Request $request): Response
    {
        $user = $this->getUser();    
        $cart = $this->cartServices->getCartDetails();
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier


        if($this->session->get('checkout_data')){
            return $this->redirectToRoute('checkoutConfirm');
        }

        $form = $this->createForm(CheckoutType::class, null, ['user'=>$user]);

        return $this->render('delivery_address/index.html.twig', [
            'cart'=>$cart,
            'checkout'=>$form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
}
