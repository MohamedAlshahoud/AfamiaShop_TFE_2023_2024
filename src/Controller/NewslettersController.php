<?php

namespace App\Controller;

use App\Entity\Newsletters\Newsletters;
use App\Entity\Newsletters\Users;
use App\Form\NewslettersType;
use App\Form\NewslettersUsersType;
use App\Form\SearchProductType;
use App\Repository\Newsletters\NewslettersRepository;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;
use Swift_Image;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use Symfony\Component\Routing\Annotation\Route;

class NewslettersController extends AbstractController
{

    private $doctrine;
    private $cartServices;

    public function __construct(ManagerRegistry $doctrine, CartServices $cartServices)
    {
        $this->doctrine = $doctrine;
        $this->cartServices = $cartServices;
    }


    #[Route('/newsletters', name: 'app_newsletters')]
    public function index(Request $request, MailerInterface $mailer, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $user = new Users();
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier
        $form = $this->createForm(NewslettersUsersType::class, $user);

        $form->handleRequest($request);

        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);

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


        if($form->isSubmitted() && $form->isValid()){
            $token = hash('sha256', uniqid());

            $user->setValidationToken($token);

            $entityManager->persist($user);
            $entityManager->flush();
           
            $subject = $translator->trans('Your subscription to the newsletter');
            $email = (new TemplatedEmail())
                ->from('contact@afamiashop.be')
                ->to($user->getEmail())
                ->subject($subject)
                ->htmlTemplate('emails/inscription.html.twig')
                ->context(compact('user', 'token'))
                ;

            $mailer->send($email);

            return $this->redirectToRoute('check_email');
        }

        return $this->render('newsletters/index.html.twig', [
            'form' => $form->createView(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/newsletters/confirm/{id}/{token}', name: 'newsletters_confirm')]
    public function confirm(Users $user, $token, EntityManagerInterface $entityManager): Response
    {
        if($user->getValidationToken() != $token){
            throw $this->createNotFoundException('Page not found');
        }
        $user->setIsValid(true);

        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('newsletter_subscription_confirm');
    }
    
    #[Route('/newsletters/list', name: 'newsletters_list')]
    public function list(NewslettersRepository $newsletters, Request $request): Response
    {
        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);

        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

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
        return $this->render('newsletters/list.html.twig', [
            'newsletters' => $newsletters->findAll(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/newsletters/send/{id}', name: 'newsletters_send')]
    public function send(Newsletters $newsletter, MailerInterface $mailer, EntityManagerInterface $entityManager): Response
    {
        $users = $newsletter->getCategories()->getUsers();

        foreach($users as $user){
            if($user->getIsValid()){
                $email = (new TemplatedEmail())
                      ->from('contact@afamiashop.be')
                      ->to($user->getEmail())
                      ->subject($newsletter->getName())
                      ->htmlTemplate('emails/newsletter.html.twig')
                      ->context(compact('newsletter', 'user')); 
                $mailer->send($email);
            }
        }

        $newsletter->setIsSent(true);

        $entityManager->persist($newsletter);
        $entityManager->flush();

        return $this->redirectToRoute('newsletters_list');
    }


    #[Route('/newsletters/unsubscribe/{id}/{newsletter}/{token}', name: 'newsletters_unsubscribe')]
    public function unsubscribe(Users $user, Newsletters $newsletter, $token, Request $request): Response
    {
        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);

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

        if($user->getValidationToken() != $token){
            throw $this->createNotFoundException('Page not found');
        }

        $em = $this->doctrine->getManager();

        if(count($user->getCategories()) > 1){
            $user->removeCategory($newsletter->getCategories());
            $em->persist($user);
        }else{
            $em->remove($user);
        }
        $em->flush();

        return $this->redirectToRoute('unsubscribe_newsletters');
    }

    #[Route('/check-email', name: 'check_email')]
    public function checkEmail(Request $request): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);
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
        return $this->render('emails/check_newsletters.html.twig', [
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/subscription_confirm', name: 'newsletter_subscription_confirm')]
    public function subscriptionConfirm(Request $request): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier
        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);
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
        return $this->render('emails/newsletter_subscription_confirmation.html.twig', [
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/unsubscribe_newsletters', name: 'unsubscribe_newsletters')]
    public function unsubscribeNewsletters(Request $request): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);
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

        return $this->render('emails/unsubscribe_newsletters.html.twig', [
            'search' =>$Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
}
