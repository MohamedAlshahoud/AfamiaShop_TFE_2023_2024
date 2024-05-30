<?php

namespace App\Controller;

use App\Entity\Address;
use App\Form\AddressType;
use App\Form\SearchProductType;
use App\Repository\AddressRepository;
use App\Services\CartServices;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Translation\TranslatorInterface;

#[Route('/address')]
class AddressController extends AbstractController
{
    private $cartServices;
 
    public function __construct(CartServices $cartServices)
    {
        $this->cartServices = $cartServices;
    }

    #[Route('/', name: 'address_index', methods: ['GET'])]
    public function index(AddressRepository $addressRepository, Request $request): Response
    {
        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

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

        return $this->render('address/index.html.twig', [
            'addresses' => $addressRepository->findAll(),
            'search' => $Search->createView(),
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/new', name: 'address_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, CartServices $cartServices, TranslatorInterface $translator): Response
    {
        $address = new Address();
        $form = $this->createForm(AddressType::class, $address);
        $Search = $this->createForm(SearchProductType::class, null);
        $form->handleRequest($request);
        $Search->handleRequest($request);

        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

        if ($form->isSubmitted() && $form->isValid()) {
            $user = $this->getUser();
            $address->getUser($user);
            $entityManager->persist($address);
            $entityManager->flush();
            $message = $translator->trans('Your address has been registered successfully');
            
            $this->addFlash('address_message', $message);
            return $this->redirectToRoute('app_account_address', [], Response::HTTP_SEE_OTHER);
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

        return $this->renderForm('address/new.html.twig', [
            'address' => $address,
            'form' => $form,
            'search' =>$Search,
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/{id}', name: 'address_show', methods: ['GET'])]
    public function show(Address $address): Response
    {
        return $this->render('address/show.html.twig', [
            'address' => $address,
        ]);
    }

    #[Route('/{id}/edit', name: 'address_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Address $address, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        $Search = $this->createForm(SearchProductType::class, null);
        $Search->handleRequest($request);
        $form = $this->createForm(AddressType::class, $address);
        $form->handleRequest($request);

        $cartDetails = $this->cartServices->getCartDetails(); //product number in the cart icon

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $message = $translator->trans('Your address has been changed');

            $this->addFlash('address_message', $message);
            return $this->redirectToRoute('app_account_address', [], Response::HTTP_SEE_OTHER);
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

        return $this->renderForm('address/edit.html.twig', [
            'address' => $address,
            'form' => $form,
            'search' =>$Search,
            'quantity' => $cartDetails['quantity']
        ]);
    }

    #[Route('/{id}', name: 'address_delete', methods: ['POST'])]
    public function delete(Request $request, Address $address, EntityManagerInterface $entityManager, TranslatorInterface $translator): Response
    {
        if ($this->isCsrfTokenValid('delete'.$address->getId(), $request->request->get('_token'))) {
            $entityManager->remove($address);
            $entityManager->flush();
            $message = $translator->trans('Your address has been deleted');
            $this->addFlash('address_message', $message);
        }

        return $this->redirectToRoute('app_account_address', [], Response::HTTP_SEE_OTHER);
    }
}