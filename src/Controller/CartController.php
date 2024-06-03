<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Transporter;
use App\Form\SearchProductType;
use App\Repository\TransporterRepository;
use App\Repository\ProductRepository;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{

    public function __construct(
        private CartServices $cartServices,
        private TransporterRepository $transporterRepository,
        private RequestStack $requestStack,
    )
    {
        $this->cartServices = $cartServices;
        $this->requestStack = $requestStack;

    }

    #[Route('/cart', name: 'app_cart')]
    public function index(EntityManagerInterface $entityManagerInterface, Request $request): Response
    {
        $cart = $this->cartServices->getCartDetails();
        $transporters = $this->transporterRepository->findAll();

        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

        $cart_json = json_encode($cart);
        $products = $entityManagerInterface->getRepository(Product::class)->findAll();
        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);

        if ($request->isMethod('post')) {
            if($form->isSubmitted() && $form->isValid()){

                $data = $form->getData();

                if ($data["product"] != null) {
                    $name = $data["product"];
                } else {
                    $name = "all";
                }
                if ($data["category"] != null) {
                    $categorie = $data["category"]->getId();
                } else {
                    $categorie = "all";
                }
                if ($data["gender"] != null) {
                    $gendre = $data["gender"]->getId();
                } else {
                    $gendre = "all";
                }
                if ($data["color"] != null) {
                    $color = $data["color"]->getId();
                } else {
                    $color = "all";
                }
                return $this->redirect($this->generateUrl('app_search_result', array('name' => $name, 'categorie' => $categorie, 'gendre' => $gendre, 'color' => $color)));
            }
        }

        return $this->render('cart/index.html.twig', [
            'controller_name' => 'CartController',
            'cart' => $cart,
            'transporters' => $transporters,
            "cart_json" => $cart_json,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/cart/add/{productId}/{count}', name: 'app_add_to_cart')]
    public function addToCart(string $productId, $count = 1): Response
    {
        $this->cartServices->addToCart($productId,$count);
        
        return $this->redirectToRoute("app_cart");
    }

    #[Route('/cart/remove/{productId}/{count}', name: 'app_remove_to_cart')]
    public function removeToCart(string $productId, $count = 1): Response
    {
        $this->cartServices->removeToCart($productId,$count);
        
        return $this->redirectToRoute("app_cart");
    }

    #[Route('/cart/get', name: 'app_get_cart')]
    public function getCart(): Response
    {
        $cart = $this->cartServices->getCartDetails();

        return $this->json($cart);
        
    }


    //Affichage du numéro de produit dans l'icône du panier

    #[Route('/cart/amount', name: 'cart_amount')]
    public function cartAmount(): Response
    {
        $cartDetails = $this->cartServices->getCartDetails();
        return $this->render('cartamount/index.html.twig', [
            'quantity' => $cartDetails['quantity'],
        ]);
    }
}