<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\SearchProductType;
use App\Form\SearchProductTypee;
use App\Repository\ProductRepository;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SearchController extends AbstractController
{
    private $productRepository;
    private $cartServices;

    public function __construct(ProductRepository $productRepository, CartServices $cartServices)
    {
        $this->productRepository = $productRepository;
        $this->cartServices = $cartServices;
    }

    #[Route('/search', name: 'app_search')]
    public function search(EntityManagerInterface $entityManager,PaginatorInterface $paginator, Request $request, ProductRepository $productRepository): Response
    {

        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

        $products = $entityManager->getRepository(Product::class)->findAll();
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
            }
            return $this->redirect($this->generateUrl('app_search_result', array('name' => $name, 'categorie' => $categorie, 'gendre' => $gendre, 'color' => $color)));
        }
        return $this->render('search/index.html.twig', [
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
}
