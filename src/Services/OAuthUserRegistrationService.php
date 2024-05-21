<?php

namespace App\Services;

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use League\OAuth2\Client\Provider\GoogleUser;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;

final readonly class OAuthUserRegistrationService
{
  public function __construct(private EntityManagerInterface $em, private UserPasswordHasherInterface $passwordHasher, private UserRepository $userRepository)
  {
    
  }

  /**
   * @param GoogleUser $resourceOwner
   */
  public function saveUser(ResourceOwnerInterface $resourceOwner): User
  {
    $userExist = $this->userRepository->findOneBy(['email' => $resourceOwner->getEmail()]);
    
    if($userExist) {
      $session = new Session();
      $session->getFlashBag()->add("loginError", "You already have an account. Reset your password if you forgot it.");
      throw new AuthenticationException("You already have an account");
    }

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