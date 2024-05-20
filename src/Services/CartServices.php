<?php

namespace App\Services;

use App\Entity\Product;
use App\Entity\SiteInformation;
use App\Repository\TransporterRepository;
use App\Repository\ProductRepository;
use App\Repository\SiteInformationRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

class CartServices
{
    private $session;


    public function __construct(
        private RequestStack $requestStack,
        private ProductRepository $productRepository,
        private TransporterRepository $transporterRepository,
        private SiteInformationRepository $infosRepository,
    )
    {
        $this->session = $requestStack->getSession();
    }

    public function get($key)
    {
        return $this->session->get($key, []);
    }

    public function update($key, $cart)
    {
        return $this->session->set($key, $cart);
    }
    
    public function addToCart($productId, $count = 1)
    {
        $cart = $this->get('cart');
        if(!empty($cart[$productId])){

            //produit est déja dans le panier
            $cart[$productId] += $count;
        }else{
            // le produit n'est pas dans le panier
            $cart[$productId] = $count;
        }
         $this->update("cart", $cart);
    }

    public function removeToCart($productId, $count = 1)
    {
        $cart = $this->get('cart');

        if(isset($cart[$productId])){
            if($cart[$productId] <= $count){
                unset($cart[$productId]);
            }
            else{
                $cart[$productId] -= $count;
            }
            $this->update("cart", $cart);
        }
    }

    public function clearCart(){
        $this->update("cart", []);

    }

    public function updateCartTransporter($transporter){
        $this->update("transporter", $transporter);

    }


    
    public function getCartDetails()
    {

        $cart = $this->get('cart');
        $result = [ 'items'=> [], 'sub_total' => 0, 'cart_count' => 0, 'quantity' => 0,];

        $sub_total = 0;
        $tva = 0;
        $infos = $this->infosRepository->findOneByName("AfamiaShop");

        if($infos){
            $tva = $infos->getTva()/100;
        }

        foreach ($cart as $productId => $quantity){
            $product = $this->productRepository->find($productId);
            if($product){
                $current_sub_total = $product->getPrice()*$quantity;
                $sub_total += $current_sub_total;
                $result[ 'items'][] = [
                    'product' => [
                        'id'=>$product->getId(),
                        'name'=>$product->getName(),
                        'description'=>$product->getDescription(),
                        'imageUrls'=>$product->getImageUrls(),
                        'price'=>$product->getPrice(),
                    ],
                    'quantity' => $quantity,
                    'sub_total_htva' => round($current_sub_total/(1 + $tva)),
                    'tva' => round($tva * $current_sub_total/(1 + $tva)),
                    'sub_total' =>$current_sub_total,
                ];
                $result['sub_total'] = $sub_total;
                $result['sub_total_htva'] = round($sub_total/(1 + $tva));
                $result['tva'] = round($tva * $result['sub_total_htva']);
                $result['cart_count'] += $quantity;
                $result['quantity'] += $quantity;
            }else{
                unset($cart[$productId]);
                $this->update("cart", $cart);
            }
        }

        // $transporter = $this->get("transporter");
        // if(!$transporter){
        //     $transporter = $this->transporterRepository->findAll()[0];
        //     $transporter = [
        //         "id"=> $transporter->getId(),
        //         "name"=> $transporter->getName(),
        //         "description"=> $transporter->getDescription(),
        //         "price"=> $transporter->getPrice(),
        //     ];
        //     $transporter = $this->update("transporter", $transporter);

        // }
        
        // $result["transporter"] = $transporter;
        // $result['sub_total_with_transporter'] = $result['sub_total'] + $result['transporter']['price'];
        // {{ (cart.sub_total /100 + (transporter.price / 100)) |format_currency('EUR') }}

        return $result;
    }


}
