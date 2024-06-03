<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\SearchProductType;
use App\Repository\UserRepository;
use App\Security\EmailVerifier;
use App\Security\LoginAuthenticator;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mime\Address;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use Symfony\Contracts\Translation\TranslatorInterface;
use SymfonyCasts\Bundle\VerifyEmail\Exception\VerifyEmailExceptionInterface;

class RegistrationController extends AbstractController
{
    private EmailVerifier $emailVerifier;
    private $cartServices;

    public function __construct(EmailVerifier $emailVerifier, CartServices $cartServices)
    {
        $this->emailVerifier = $emailVerifier;
        $this->cartServices = $cartServices;
    }

    #[Route('/register', name: 'app_register')]
    public function register(Request $request, UserPasswordHasherInterface $userPasswordHasher, UserAuthenticatorInterface $userAuthenticator, LoginAuthenticator $authenticator, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

        $user = new User();
        $Search = $this->createForm(SearchProductType::class, null);
        $form = $this->createForm(RegistrationFormType::class, $user);
        $Search->handleRequest($request);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encoder le mot de passe simple
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            $subject = $translator->trans('Please Confirm your Email');
            $contact = $translator->trans('\"Afamia Contact\"');
            // générer une URL signée et l'envoyer par e-mail à l'utilisateur
            $this->emailVerifier->sendEmailConfirmation('app_verify_email', $user,
                (new TemplatedEmail())
                    ->from(new Address('contact@afamiashop.be', $contact))
                    ->to($user->getEmail())
                    ->subject($subject)
                    ->htmlTemplate('registration/confirmation_email.html.twig')
            );
            // faites tout ce dont vous avez besoin ici, comme envoyer un e-mail
            return $this->redirectToRoute('send_email_register');
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

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form->createView(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/verify/email', name: 'app_verify_email')]
    public function verifyUserEmail(Request $request, TranslatorInterface $translator, UserRepository $userRepository): Response
    {
        $id = $request->get('id');

        if (null === $id) {
            return $this->redirectToRoute('app_register');
        }

        $user = $userRepository->find($id);

        if (null === $user) {
            return $this->redirectToRoute('app_register');
        }

        // valider le lien de confirmation par e-mail, définit User::isVerified=true et persiste
        try {
            $this->emailVerifier->handleEmailConfirmation($request, $user);
        } catch (VerifyEmailExceptionInterface $exception) {
            $this->addFlash('verify_email_error', $translator->trans($exception->getReason(), [], 'VerifyEmailBundle'));

            return $this->redirectToRoute('app_register');
        }

        // Modifier la redirection en cas de succès et gérez ou supprimez le message flash dans vos modèles
        $this->addFlash('success', 'Your email address has been verified.');

        return $this->redirectToRoute('confirm_after_email');
    }

    #[Route('/send_email', name: 'send_email_register')]
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

        return $this->render('registration/send_email.html.twig', [
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/confirm_after_email', name: 'confirm_after_email')]
    public function confirmUserAfterEmail(Request $request): Response
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

        return $this->render('registration/confirmUserAfterEmail.html.twig', [
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
}
