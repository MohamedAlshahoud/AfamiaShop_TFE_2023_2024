<?php

namespace App\Services;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

final readonly class OAuthUserRegistrationService
{
  public function __construct(private EntityManagerInterface $em, private UserPasswordHasherInterface $passwordHasher)
  {
    
  }

  /**
   * @param GoogleUser $resourceOwner
   */
  public function saveUser(ResourceOwnerInterface $resourceOwner): User
  {

    $user = (new User())
          ->setEmail($resourceOwner->getEmail())
          ->setFirstname($resourceOwner->getFirstName())
          ->setUsername($resourceOwner->getFirstName())
          ->setLastname($resourceOwner->getLastName())
          ->setIsVerified(true)
          ->setGoogleId($resourceOwner->getId());

    $hashedPassword = $this->passwordHasher->hashPassword(
      $user,
      $resourceOwner->getEmail()
    );

    $user->setPassword($hashedPassword);

    $this->em->persist($user);
    $this->em->flush();

    return $user;
  }
}