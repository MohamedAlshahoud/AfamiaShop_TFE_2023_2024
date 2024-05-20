<?php

namespace App\Security;

use App\Entity\User;
use App\Repository\UserRepository;
use App\Services\OAuthUserRegistrationService;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use KnpU\OAuth2ClientBundle\Client\OAuth2ClientInterface;
use KnpU\OAuth2ClientBundle\Security\Authenticator\OAuth2Authenticator;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Exception\AuthenticationException;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\SelfValidatingPassport;
use Symfony\Component\Security\Http\Util\TargetPathTrait;

abstract class AbstractOAuthAuthenticator extends OAuth2Authenticator
{

  use TargetPathTrait;

  protected string $serviceName = "";

  public function __construct(
    private readonly ClientRegistry $registry,
    private readonly RouterInterface $router,
    private readonly UserRepository $userRepository,
    private readonly OAuthUserRegistrationService $userRegistrationService
  )
  {}

  public function authenticate(Request $request): SelfValidatingPassport
  {
    $credentials = $this->fetchAccessToken($this->getClient());
    $resourceOwner = $this->getResourceOwnerFromCredentials($credentials);
    $user = $this->getUserFromResourceOwner($resourceOwner, $this->userRepository);

    if($user === null) {
      $user = $this->userRegistrationService->saveUser($resourceOwner);
    }

    return new SelfValidatingPassport(new UserBadge($user->getUserIdentifier(), fn () => $user), [ new RememberMeBadge]);
  }

  public function supports(Request $request): ?bool
  {
    return 'auth_oauth_check' === $request->attributes->get('_route') && $request->get('service') === $this->serviceName;
  }

  public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
  {
    $targetPath = $this->getTargetPath($request->getSession(), $firewallName);
    if($targetPath) {
      return new RedirectResponse($targetPath);
    }

    return new RedirectResponse($this->router->generate('app_account'));
  }

  public function onAuthenticationFailure(Request $request, AuthenticationException $exception): ?Response
  {
    if($request->hasSession()) {
      $request->getSession()->set(Security::AUTHENTICATION_ERROR, $exception);
    }

    return new RedirectResponse($this->router->generate('app_login'));
  }

  protected function getResourceOwnerFromCredentials(AccessToken $credentials): ResourceOwnerInterface
  {
    return $this->getClient()->fetchUserFromToken($credentials);
  }

  private function getClient(): OAuth2ClientInterface
  {
    return $this->registry->getClient($this->serviceName);
  }

  abstract protected function getUserFromResourceOwner(ResourceOwnerInterface $resourceOwner, UserRepository $userRepository): ?User;
}