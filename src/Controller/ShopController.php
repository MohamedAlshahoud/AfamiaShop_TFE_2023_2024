<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\FilterProductType;
use App\Form\SearchProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShopController extends AbstractController
{
    private $productRepository;
        public function __construct(ProductRepository $productRepository)
        {
            $this->productRepository = $productRepository;
        }

    #[Route('/shop', name: 'app_shop')]
    public function index(Request $request, PaginatorInterface $paginator, ProductRepository $productRepository, EntityManagerInterface $entityManager): Response
    {

        $products = $entityManager->getRepository(Product::class)->findAll();
        $filterForm = $this->createForm(FilterProductType::class, null);
        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);
        $filterForm->handleRequest($request);

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

        if ($request->isMethod('post')) {
            if($filterForm->isSubmitted() && $filterForm->isValid()){

                $data = $filterForm->getData();

                if ($data["category"] != null) {
                    $categorie = $data["category"]->getId();
                } else {
                    $categorie = "all";
                }
                if ($data["gender"] != null) {
                    $gender = $data["gender"];
                } else {
                    $gender = "all";
                }
                if ($data["color"] != null) {
                    $color = $data["color"];
                } else {
                    $color = "all";
                }
            }
            $products = $entityManager->getRepository(Product::class)->findByFilter($categorie, $gender, $color);  
        }
        $products = $paginator->paginate(
            $products, /* query NOT result */
            $request->query->getInt('page', 1),
            24
        );
        
        return $this->render('shop/index.html.twig', [
            'products' => $products,
            'search' => $form->createView(),
            'filterForm' => $filterForm->createView()
        ]);
    }

}