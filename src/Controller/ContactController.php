<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Form\SearchProductType;
use App\Repository\ContactRepository;
use App\Services\CartServices;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface as TranslationTranslatorInterface;

class ContactController extends AbstractController
{
    private $cartServices;
 
    public function __construct(CartServices $cartServices)
    {
        $this->cartServices = $cartServices;
    }

    #[Route('/contact', name: 'app_contact', methods: ['GET', 'POST'])]
    public function index(Request $request, ContactRepository $contactRepository, TranslationTranslatorInterface $translator): Response
    {

        $contact = new Contact();
        $Search = $this->createForm(SearchProductType::class, null);
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        $Search->handleRequest($request);

        $cartDetails = $this->cartServices->getCartDetails(); //numéro de produit dans l'icône du panier

        if ($form->isSubmitted() && $form->isValid()) {
            $contactRepository->save($contact, true);

            // envoi email

            $contact = new Contact();
            $form = $this->createForm(ContactType::class, $contact);
            $message = $translator->trans('Your message has been sent, An advisor will answer uoy very quickly');
            $this->addFlash('contact_success', $message);
        }
        if($form->isSubmitted() && !$form->isValid()){
            $error = $translator->trans('The form contains errors . please correct and try again .');
            $this->addFlash('contact_error', $error);
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
        return $this->render('contact/index.html.twig', [
            'contact' => $contact,
            'form' => $form->createView(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }
}
