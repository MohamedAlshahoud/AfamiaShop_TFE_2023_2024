<?php

namespace App\Services;

use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;
use Twig\Environment;

class EmailOrderConfirmation
{
    private $mailer;
    private $twig;

    public function __construct(MailerInterface $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    public function sendOrderConfirmation($userEmail, $order)
    {
        $email = (new Email())
            ->from(new Address('contact@afamiashop.be'))
            ->to($userEmail)
            ->subject('Order Confirmation')
            ->html($this->twig->render('emailOrderConfirmation/index.html.twig', [
                'order' => $order
            ]));

        $this->mailer->send($email);
    }
}
