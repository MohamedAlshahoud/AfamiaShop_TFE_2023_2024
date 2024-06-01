<?php

namespace App\Controller;

use App\Entity\Address;
use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Entity\Product;
use App\Entity\User;
use App\Form\ChangePasswordType;
use App\Form\ChangeProfileType;
use App\Form\ResetPasswordRequestFormType;
use App\Form\SearchProductType;
use App\Repository\AddressRepository;
use App\Repository\OrderRepository;
use App\Security\LoginAuthenticator;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Id;
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\CssSelector\XPath\TranslatorInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Contracts\Translation\TranslatorInterface as TranslationTranslatorInterface;

class AccountController extends AbstractController
{

    private $orderRepository;
    private EntityManagerInterface $entityManager;
    private $cartServices;
 
    public function __construct(OrderRepository $orderRepository, EntityManagerInterface $entityManager, CartServices $cartServices)
    {
        $this->orderRepository = $orderRepository;
        $this->entityManager = $entityManager;
        $this->cartServices = $cartServices;
    }

    #[Route('/account', name: 'app_account')]
    public function index(AddressRepository $addressRepository, OrderRepository $orderRepository, EntityManagerInterface $entityManagerInterface, Request $request): Response
    {
        $user = $this->getUser();
        $addresses = $addressRepository->findByUser($user);
        $orders = $orderRepository->findBy(['user' => $user, 'isPaid' => 'isPaid']);
        $products = $entityManagerInterface->getRepository(Product::class)->findAll();
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

        
        return $this->render('account/index.html.twig', [
            'addresses' => $addresses,
            'orders' => $orders,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/account-address', name: 'app_account_address')]
    public function indexAddress(AddressRepository $addressRepository, OrderRepository $orderRepository, EntityManagerInterface $entityManagerInterface, Request $request): Response
    {
        $user = $this->getUser();
        $addresses = $addressRepository->findByUser($user);
        $orders = $orderRepository->findBy(['user' => $user, 'isPaid' => 'isPaid']);
        $products = $entityManagerInterface->getRepository(Product::class)->findAll();
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

        
        return $this->render('account/address_list.html.twig', [
            'addresses' => $addresses,
            'orders' => $orders,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/orders', name: 'app_account_orders')]
    public function accountOrders(AddressRepository $addressRepository, OrderRepository $orderRepository, EntityManagerInterface $entityManagerInterface, Request $request): Response
    {
        $user = $this->getUser();
        $addresses = $addressRepository->findByUser($user);
        $orders = $orderRepository->findBy(['user' => $user, 'isPaid' => 'isPaid']);
        $products = $entityManagerInterface->getRepository(Product::class)->findAll();
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

        
        return $this->render('account/orders.html.twig', [
            'addresses' => $addresses,
            'orders' => $orders,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/account/profile/change', name: 'change_profile')]
    public function changeProfile(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager, TranslationTranslatorInterface $translator): Response
    {
        $user = $this->getUser();
        $form = $this->createForm(ChangeProfileType::class, $user);
        $Search = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);
        $Search->handleRequest($request);
        $cartDetails = $this->cartServices->getCartDetails();

        if ($form->isSubmitted() && $form->isValid()) {
            
            $entityManager->persist($user);
            $entityManager->flush();
            $message = $translator->trans('Your profile has been changed');

            $this->addFlash('address_message', $message);
            return $this->redirectToRoute('app_account', [], Response::HTTP_SEE_OTHER);
        }
        if ($request->isMethod('post')) {
            if($Search->isSubmitted() && $Search->isValid()){

                $data = $Search->getData();

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

        return $this->render('account/change_profile.html.twig', [
            'profileForm' => $form->createView(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    

    #[Route('/account/password/change', name: 'change_password')]
    public function changePassword(Request $request, UserPasswordHasherInterface $userPasswordHasher, TranslationTranslatorInterface $translator, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager, AuthenticationUtils $authenticationUtils): Response
    {
        $user = $this->getUser();
        $Search = $this->createForm(SearchProductType::class, null);
        $form = $this->createForm(ChangePasswordType::class, $user);
        $Search->handleRequest($request);
        $form->handleRequest($request);
        $cartDetails = $this->cartServices->getCartDetails();

        if ($form->isSubmitted() && $form->isValid()) {
            $oldPassword = $form->get('oldPassword')->getData();
            if($userPasswordHasher->isPasswordValid($user, $oldPassword)){
                $newPassword = $form->get('plainPassword')->getData();

                $password = $userPasswordHasher->hashPassword($user, $newPassword);
                $user->setPassword($password);

                $entityManager->persist($user);
                $entityManager->flush();
                $message = $translator->trans('Your password has been changed');

                $this->addFlash('address_message', $message);

                return $this->redirectToRoute('app_account', [], Response::HTTP_SEE_OTHER);

            }
        }
        if ($request->isMethod('post')) {
            if($Search->isSubmitted() && $Search->isValid()){

                $data = $Search->getData();

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


        return $this->render('account/change_password.html.twig', [
            'passwordForm' => $form->createView(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
    

    #[Route('/order/details/{reference}', name: 'order_details')]
    public function detailsOrder(Order $orders, AddressRepository $addressRepository, OrderRepository $orderRepository, EntityManagerInterface $entityManagerInterface, Request $request, $reference): Response
    {
        $orders = $this->entityManager->getRepository(Order::class)->findOneBy(['reference' => $reference]);
        
        $user = $this->getUser();
        $addresses = $addressRepository->findByUser($user);
        // $orderDetails = $this->orderRepository->findOneBy(['id']);
        $products = $entityManagerInterface->getRepository(Product::class)->findAll();
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

        
        return $this->render('account/order_details.html.twig', [
            'addresses' => $addresses,
            'orderDetails' => $orders,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }


}