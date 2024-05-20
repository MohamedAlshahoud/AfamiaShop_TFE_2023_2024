<?php

namespace App\Controller\Api;

use App\Repository\OrdersRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ApiOrderController extends AbstractController
{
    #[Route('/api/order', name: 'app_api_api_order', methods: ["POST"])]
    public function update(Request $request, OrdersRepository $ordersRepository, EntityManagerInterface $entityManagerInterface): Response
    {
        $data = $request->getPayload();
        $id = $data->get("orderId");
        $order = $ordersRepository->findOneById($id);

        if(!$order){
            return $this->redirectToRoute('/checkout');
        }
        $order->setDeliveryAddress($data->get('deliveryAddress'));

        $entityManagerInterface->persist($order);
        $entityManagerInterface->flush();
        
        return $this->render('api/api_order/index.html.twig', [
            'controller_name' => 'ApiOrderController',
        ]);
    }
}
