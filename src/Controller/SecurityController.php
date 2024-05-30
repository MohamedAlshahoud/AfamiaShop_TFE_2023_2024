<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\SearchProductType;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    private $cartServices;
 
    public function __construct(CartServices $cartServices)
    {
        $this->cartServices = $cartServices;
    }

    public const SCOPES = [
      'google' => []
    ];

    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils, EntityManagerInterface $entityManagerInterface, Request $request): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
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

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
            'products' => $products,
            'search' => $form->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/oauth/login/{service}', name: 'app_oauth_login', methods: ["GET"])]
    public function connect(string $service, ClientRegistry $registry): RedirectResponse
    {
      if(!in_array($service, array_keys(self::SCOPES), true)) {
        throw $this->createNotFoundException();
      }

      return $registry->getClient($service)->redirect(self::SCOPES[$service], []);
    }

    #[Route(path: '/oauth/check/{service}', name: 'auth_oauth_check', methods: ["GET", "POST"])]
    public function check(): Response
    {
      return new Response(status: 200);
    }
}
