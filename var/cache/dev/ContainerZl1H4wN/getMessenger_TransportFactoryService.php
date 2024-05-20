<?php

namespace ContainerZl1H4wN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMessenger_TransportFactoryService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'messenger.transport_factory' shared service.
     *
     * @return \Symfony\Component\Messenger\Transport\TransportFactory
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactoryInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/messenger/Transport/TransportFactory.php';

        return $container->privates['messenger.transport_factory'] = new \Symfony\Component\Messenger\Transport\TransportFactory(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['messenger.transport.sync.factory'] ?? $container->load('getMessenger_Transport_Sync_FactoryService'));
            yield 1 => ($container->privates['messenger.transport.in_memory.factory'] ?? ($container->privates['messenger.transport.in_memory.factory'] = new \Symfony\Component\Messenger\Transport\InMemoryTransportFactory()));
            yield 2 => ($container->privates['messenger.transport.doctrine.factory'] ?? $container->load('getMessenger_Transport_Doctrine_FactoryService'));
        }, 3));
    }
}
