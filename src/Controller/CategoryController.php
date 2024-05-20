<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Product;
use App\Form\SearchProductType;
use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\Request;

class CategoryController extends AbstractController
{

    //afficher une categorie par ID 
    #[Route('/category/{id}', name: 'show_category')]
    public function show(Category $category, PaginatorInterface $paginator, ProductRepository $productRepository, Request $request, EntityManagerInterface $entityManagerInterface): Response
    {

        $products = $category ->getProducts();
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
        
        $products = $paginator->paginate(
            $products, /* query NOT result */
            $request->query->getInt('page', 1),
            8
        );
        return $this->render('category/show.html.twig', [
            'products' => $products,
            'category' => $category,
            'search' => $form->createView()
        ]);
    }


    #[Route('/category', name: 'app_category')]
    public function index(EntityManagerInterface $entityManager, Request $request): Response
    {

        $categories = $entityManager->getRepository(Category::class)->findAll();

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
                return $this->redirect($this->generateUrl('app_search_result', array('name' => $name, 'categorie' => $categorie, 'gendre' => $gendre, 'color' => $color)));
            }
        }
        return $this->render('category/index.html.twig', [
            'categories' => $categories,
            'products' => $products,
            'search' => $form->createView()
        ]);
    }

    
}
