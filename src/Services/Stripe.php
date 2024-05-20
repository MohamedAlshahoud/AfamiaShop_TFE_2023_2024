<?php

namespace App\Services;

use App\Repository\PaymentRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class Stripe 
{
    
    private $session;

    public function __construct(
        private RequestStack $requestStack,
        private PaymentRepository $paymentRepository,
    )
    {
        $this->session = $requestStack->getSession();
    }
    public function getPublicKey(){
        $config = $this->paymentRepository->findOneByName("Stripe");

        if($_ENV['APP_ENV'] === 'dev'){
            //mode dev
            return $config->getTestPublicApiKey();
        }else{
            //mode prod
            return $config->getProdPublicApiKey();
        }
    }

    public function getPrivateKey(){
        $config = $this->paymentRepository->findOneByName("Stripe");

        if($_ENV['APP_ENV'] === 'dev'){
            //mode dev
            return $config->getTestPrivateApiKey();
        }else{
            //mode prod
            return $config->getProdPrivateApiKey();
        }
    }
}