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
use DateTime;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use League\OAuth2\Client\Provider\Github;
use League\OAuth2\Client\Provider\Facebook;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface as TranslationTranslatorInterface;

class HomeController extends AbstractController
{

    private $productRepository;
    private $provider;
 
        public function __construct(ProductRepository $productRepository)
        {
            $this->productRepository = $productRepository;

            $this->provider=new Facebook([
                'clientId'          => $_ENV['FCB_ID'],
                'clientSecret'      => $_ENV['FCB_SECRET'],
                'redirectUri'       => $_ENV['FCB_CALLBACK'],
                'graphApiVersion'   => 'v15.0',
            ]);
        }

    #[Route('/', name: 'app_home')]
    public function index(EntityManagerInterface $entityManager, SliderRepository $sliderRepository,Request $request, PaginatorInterface $paginator, ProductRepository $productRepository, SiteInformationRepository $siteInformationRepository): Response
    {
        $session = $request->getSession();
        $data = $siteInformationRepository->findAll();
        $slider = $sliderRepository->findBy(['isDisplayed'=>true]);
        $session->set('siteInformation', $data[0]);

        $categories = $entityManager->getRepository(Category::class)->findBy([],['id' => 'DESC'],4);
        // $newProduct = $productRepository->findByIsNewProduct(1);
        // $newProduct =  $paginator->paginate(
        //     $productRepository->paginationQuery(),
        //     $request->query->get('page', 1),
        //     12
        // );
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
            'search' => $form->createView()
        ]);
    }

    #[Route('/search/{name}/{categorie}/{gendre}/{color}', name: 'app_search_result')]
    public function search_result( EntityManagerInterface $entityManager, Request $request,PaginatorInterface $paginator, $name, $categorie, $gendre, $color)
    {

        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);

        $products = $entityManager->getRepository(Product::class)->findWithSearch($name, $categorie, $gendre, $color);
        $products = $paginator->paginate(
            $products, /* query NOT result */
            $request->query->getInt('page', 1),
            12
        );  

        return $this->render('search/index.html.twig', [
            'products' => $products,
            'search' => $form->createView()
        ]);
    }

    #[Route('/fcb-login', name: 'fcb_login')]
    public function fcbLogin(): Response
    {

        $helper_url=$this->provider->getAuthorizationUrl();

        return $this->redirect($helper_url);
    }

    #[Route('/fcb-callback', name: 'fcb_callback')]
    public function fcbCallback(UserRepository $userDb, EntityManagerInterface $manager): Response
    {
        //Récupérer le token
       $token = $this->provider->getAccessToken('authorization_code', [
        'code' => $_GET['code']
        ]);

        try {
            //Récupérer les informations de l'utilisateur
 
            $user=$this->provider->getResourceOwner($token);
 
            $user=$user->toArray();
 
            $email=$user['email'];
 
            $firstname=$user['firstname'];
            $lastname=$user['lastname'];
 
            //Vérifier si l'utilisateur existe dans la base des données
 
            $user_exist=$userDb->findOneByEmail($email);
 
            if($user_exist)
            {
                 $user_exist->setLastname($lastname)
                            ->setFirstname($firstname);
 
                 $manager->flush();
 
 
                 return $this->render('facebook/index.html.twig', [
                     'lastname'=>$lastname,
                     'firstname'=>$firstname,

                 ]);
 
 
            }
            else
           {
                $new_user=new User();

                $new_user->setLastname($lastname)
                         ->setFirstname($firstname)
                         ->setEmail($email)
                         ->setPassword(sha1(str_shuffle('abscdop123390hHHH;:::OOOI')));
              
                $manager->persist($new_user);

                $manager->flush();


                return $this->render('facebook/index.html.twig', [
                    'lastname'=>$lastname,
                    'firtname'=>$firstname,
                ]);


           }


       } catch (\Throwable $th) {
        //throw $th;

          return $th->getMessage();
       }

 
    }
    
    #[Route('/product/{name}', name: 'show')]
    public function show(string $name, Product $produc, Request $request, EntityManagerInterface $entityManager,  TranslationTranslatorInterface $translator, PaginatorInterface $paginator): Response
    {
       $product = $this->productRepository->findOneBy(['name'=>$name]);
       $category = $produc->getCategories();
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

    // comments
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
            'produc' => $produc
            
        ]);
    }

     /**
     * @Route("/produit/{id}", name="produit_detail")
     */
    public function detail(ProductRepository $productRepository, int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        $products = $entityManager->getRepository(Product::class)->find($id);
        $form = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);

        if (!$products) {
            throw $this->createNotFoundException('The product does not exist');
        }

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

        return $this->render('product/show.html.twig', [
            'product' => $products,
            'search' =>$form->createView(), 
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
            'search' => $form->createView()
        ]);
    }

}

