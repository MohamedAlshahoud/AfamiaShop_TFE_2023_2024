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

        
        // if(!$user->getAddresses()->getValues()){
        //     $this->addFlash('checkout_message', 'Merci de renseigner une adresse de livraison avant de continuer !');
        //     return $this->redirectToRoute("address_new");
        // }

        if($this->session->get('checkout_data')){
            return $this->redirectToRoute('checkoutConfirm');
        }

        $form = $this->createForm(CheckoutType::class, null, ['user'=>$user]);
        //$form->handleRequest($request);
        //traitement du formulaire

        return $this->render('delivery_address/index.html.twig', [
            'cart'=>$cart,
            'checkout'=>$form->createView()
        ]);
    }
}
