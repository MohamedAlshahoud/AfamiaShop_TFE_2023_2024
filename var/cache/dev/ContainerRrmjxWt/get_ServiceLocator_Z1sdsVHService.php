<?php

namespace ContainerRrmjxWt;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z1sdsVHService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.z1sdsVH' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.z1sdsVH'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'mailer' => ['privates', 'mailer.mailer', 'getMailer_MailerService', true],
            'newsletter' => ['privates', '.errored..service_locator.z1sdsVH.App\\Entity\\Newsletters\\Newsletters', NULL, 'Cannot autowire service ".service_locator.z1sdsVH": it references class "App\\Entity\\Newsletters\\Newsletters" but no such service exists.'],
        ], [
            'entityManager' => '?',
            'mailer' => '?',
            'newsletter' => 'App\\Entity\\Newsletters\\Newsletters',
        ]);
    }
}
