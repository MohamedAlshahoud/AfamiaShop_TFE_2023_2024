<?php

namespace App\Controller;

use App\Entity\Category;
use App\Entity\Comments;
use App\Entity\Product;
use App\Entity\User;
use App\Form\CommentsType;
use App\Form\SearchProductType;
use App\Repository\ProductRepository;
use App\Repository\SiteInformationRepository;
use App\Repository\SliderRepository;
use App\Repository\UserRepository;
use App\Services\CartServices;
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use League\OAuth2\Client\Provider\Github;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface as TranslationTranslatorInterface;

class HomeController extends AbstractController
{

    private $productRepository;
    private $provider;
    private $cartServices;
 
    public function __construct(ProductRepository $productRepository, CartServices $cartServices)
    {
        $this->productRepository = $productRepository;
        $this->cartServices = $cartServices;
    }

    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager, SliderRepository $sliderRepository,Request $request, PaginatorInterface $paginator, ProductRepository $productRepository, SiteInformationRepository $siteInformationRepository): Response
    {
        $session = $request->getSession();
        $data = $siteInformationRepository->findAll();
        $slider = $sliderRepository->findBy(['isDisplayed'=>true]);
        $session->set('siteInformation', $data[0]);

        $categories = $entityManager->getRepository(Category::class)->findBy([],['id' => 'DESC'],4);
        $cartDetails = $this->cartServices->getCartDetails();
        
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


        return $this->render('home/index.html.twig', [
            'slider' => $slider,
            'categories' => $categories,
            'newProduct' => $this->productRepository->findBy(['isNewProduct'=>true]),
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/search/{name}/{categorie}/{gendre}/{color}', name: 'app_search_result')]
    public function search_result( EntityManagerInterface $entityManager, Request $request,PaginatorInterface $paginator, $name, $categorie, $gendre, $color)
    {

        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);
        $cartDetails = $this->cartServices->getCartDetails();

        $products = $entityManager->getRepository(Product::class)->findWithSearch($name, $categorie, $gendre, $color);
        $products = $paginator->paginate(
            $products, /* query NOT result */
            $request->query->getInt('page', 1),
            16
        );  
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
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    
    #[Route('/product/{name}', name: 'show')]
    public function show(string $name, Product $produc, Request $request, EntityManagerInterface $entityManager,  TranslationTranslatorInterface $translator, PaginatorInterface $paginator): Response
    {
        $product = $this->productRepository->findOneBy(['name'=>$name]);
        $category = $produc->getCategories();
        $cartDetails = $this->cartServices->getCartDetails();
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

    // Commentaires
    $comment = new Comments;

    $commentForm = $this->createForm(CommentsType::class, $comment);
    $commentForm->handleRequest($request);
    $message = $translator->trans('Your comment has been sent');
    $error = $translator->trans('The form contains errors . please correct and try again .');
       
    if($commentForm->isSubmitted() && $commentForm->isValid()){

        $comment->setCreatedAt(new DateTime());
        $comment->setAnnonces($product);

        $entityManager->persist($comment);
        $entityManager->flush();

        $this->addFlash('comment_success', $message);
    }
    if($commentForm->isSubmitted() && !$commentForm->isValid()){
        $this->addFlash('comment_error', $error);
    }
       return $this->render('product/show.html.twig', [
            'product' => $product,
            'commentForm' =>$commentForm->createView(),
            'search' =>$form->createView(), 
            'category' => $category,
            'produc' => $produc,
            'quantity' => $cartDetails['quantity']
            
        ]);
    }


    #[Route('/change-locale/{locale}', name: 'change_locale')]
    public function changeLocale($locale, Request $request)
    {
        // on stocke la langue demandée dans la session
        $request->getSession()->set('_locale', $locale);

        // on revient sur la page précédente
        return $this->redirect($request->headers->get('referer'));
    }


    #[Route('/terms-conditions', name: 'terms_conditions')]
    public function terms(Request $request)
    {
        $products = $this->productRepository->findAll();
        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);
        $cartDetails = $this->cartServices->getCartDetails();

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
        return $this->render('terms_conditions/term_condition.html.twig', [
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

}

