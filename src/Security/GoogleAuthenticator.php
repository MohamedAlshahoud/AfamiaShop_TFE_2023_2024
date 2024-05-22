<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use RuntimeException;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

class GoogleAuthenticator extends AbstractOAuthAuthenticator
{
    protected string $serviceName = "google";

    public function getUserFromResourceOwner(ResourceOwnerInterface $resourceOwner, UserRepository $userRepository): ?User
    {

        if(!($resourceOwner instanceof GoogleUser)) {
          throw new RuntimeException("Google user expected");
        }

        if(($resourceOwner->toArray()['email_verified'] ?? null) !== true) {
          throw new AuthenticationException("email not verified");
        }

        return $userRepository->findOneBy(['googleId' => $resourceOwner->getId(), 'email' => $resourceOwner->getEmail()]);
    }
}
