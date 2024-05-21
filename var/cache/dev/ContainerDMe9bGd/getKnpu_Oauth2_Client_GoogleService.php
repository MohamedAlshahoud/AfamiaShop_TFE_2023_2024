<?php

namespace ContainerDMe9bGd;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getKnpu_Oauth2_Client_GoogleService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'knpu.oauth2.client.google' shared service.
     *
     * @return \KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knpuniversity'.\DIRECTORY_SEPARATOR.'oauth2-client-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Client'.\DIRECTORY_SEPARATOR.'OAuth2ClientInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knpuniversity'.\DIRECTORY_SEPARATOR.'oauth2-client-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Client'.\DIRECTORY_SEPARATOR.'OAuth2Client.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knpuniversity'.\DIRECTORY_SEPARATOR.'oauth2-client-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Client'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'GoogleClient.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tool'.\DIRECTORY_SEPARATOR.'ArrayAccessorTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tool'.\DIRECTORY_SEPARATOR.'GuardedPropertyTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tool'.\DIRECTORY_SEPARATOR.'QueryBuilderTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'AbstractProvider.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-client'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Tool'.\DIRECTORY_SEPARATOR.'BearerAuthorizationTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'oauth2-google'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Provider'.\DIRECTORY_SEPARATOR.'Google.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'knpuniversity'.\DIRECTORY_SEPARATOR.'oauth2-client-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'DependencyInjection'.\DIRECTORY_SEPARATOR.'ProviderFactory.php';

        return $container->services['knpu.oauth2.client.google'] = new \KnpU\OAuth2ClientBundle\Client\Provider\GoogleClient((new \KnpU\OAuth2ClientBundle\DependencyInjection\ProviderFactory(($container->services['router'] ?? $container->getRouterService())))->createProvider('League\\OAuth2\\Client\\Provider\\Google', ['clientId' => $container->getEnv('GOOGLE_CLIENT_ID'), 'clientSecret' => $container->getEnv('GOOGLE_CLIENT_SECRET')], 'auth_oauth_check', ['service' => 'google'], []), ($container->services['request_stack'] ?? ($container->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));
    }
}
