<?php

namespace ContainerXm8YmtB;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDoctrine_Orm_DefaultEntityManagerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'doctrine.orm.default_entity_manager' shared service.
     *
     * @return \Doctrine\ORM\EntityManager
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->services['doctrine.dbal.default_connection'] ?? $container->load('getDoctrine_Dbal_DefaultConnectionService'));

        if (isset($container->services['doctrine.orm.default_entity_manager'])) {
            return $container->services['doctrine.orm.default_entity_manager'];
        }
        $b = ($container->privates['doctrine.dbal.default_connection.event_manager'] ?? $container->load('getDoctrine_Dbal_DefaultConnection_EventManagerService'));

        if (isset($container->services['doctrine.orm.default_entity_manager'])) {
            return $container->services['doctrine.orm.default_entity_manager'];
        }
        $c = new \Doctrine\ORM\Configuration();

        $d = new \Doctrine\Persistence\Mapping\Driver\MappingDriverChain();
        $d->addDriver(new \Doctrine\ORM\Mapping\Driver\AttributeDriver([0 => (\dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity')], false), 'App\\Entity');

        $c->setEntityNamespaces(['App' => 'App\\Entity']);
        $c->setMetadataCache(new \Symfony\Component\Cache\Adapter\PhpArrayAdapter(($container->targetDir.''.'/doctrine/orm/default_metadata.php'), new \Symfony\Component\Cache\Adapter\ArrayAdapter()));
        $c->setQueryCache(($container->privates['doctrine.system_cache_pool'] ?? $container->load('getDoctrine_SystemCachePoolService')));
        $c->setResultCache(($container->privates['doctrine.result_cache_pool'] ?? $container->load('getDoctrine_ResultCachePoolService')));
        $c->setMetadataDriverImpl(new \Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver($d, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine.ulid_generator' => ['privates', 'doctrine.ulid_generator', 'getDoctrine_UlidGeneratorService', true],
            'doctrine.uuid_generator' => ['privates', 'doctrine.uuid_generator', 'getDoctrine_UuidGeneratorService', true],
        ], [
            'doctrine.ulid_generator' => '?',
            'doctrine.uuid_generator' => '?',
        ])));
        $c->setProxyDir(($container->targetDir.''.'/doctrine/orm/Proxies'));
        $c->setProxyNamespace('Proxies');
        $c->setAutoGenerateProxyClasses(false);
        $c->setSchemaIgnoreClasses([]);
        $c->setClassMetadataFactoryName('Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ClassMetadataFactory');
        $c->setDefaultRepositoryClassName('Doctrine\\ORM\\EntityRepository');
        $c->setNamingStrategy(new \Doctrine\ORM\Mapping\UnderscoreNamingStrategy(0, true));
        $c->setQuoteStrategy(new \Doctrine\ORM\Mapping\DefaultQuoteStrategy());
        $c->setEntityListenerResolver(new \Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver($container));
        $c->setLazyGhostObjectEnabled(false);
        $c->setRepositoryFactory(new \Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory(new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Repository\\AddressRepository' => ['privates', 'App\\Repository\\AddressRepository', 'getAddressRepositoryService', true],
            'App\\Repository\\CategoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', true],
            'App\\Repository\\ColorRepository' => ['privates', 'App\\Repository\\ColorRepository', 'getColorRepositoryService', true],
            'App\\Repository\\CommentsRepository' => ['privates', 'App\\Repository\\CommentsRepository', 'getCommentsRepositoryService', true],
            'App\\Repository\\ContactRepository' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
            'App\\Repository\\GenderRepository' => ['privates', 'App\\Repository\\GenderRepository', 'getGenderRepositoryService', true],
            'App\\Repository\\Newsletters\\CategoriesRepository' => ['privates', 'App\\Repository\\Newsletters\\CategoriesRepository', 'getCategoriesRepositoryService', true],
            'App\\Repository\\Newsletters\\NewslettersRepository' => ['privates', 'App\\Repository\\Newsletters\\NewslettersRepository', 'getNewslettersRepositoryService', true],
            'App\\Repository\\Newsletters\\UsersRepository' => ['privates', 'App\\Repository\\Newsletters\\UsersRepository', 'getUsersRepositoryService', true],
            'App\\Repository\\OrderDetailRepository' => ['privates', 'App\\Repository\\OrderDetailRepository', 'getOrderDetailRepositoryService', true],
            'App\\Repository\\OrderDetailsRepository' => ['privates', 'App\\Repository\\OrderDetailsRepository', 'getOrderDetailsRepositoryService', true],
            'App\\Repository\\OrderRepository' => ['privates', 'App\\Repository\\OrderRepository', 'getOrderRepositoryService', true],
            'App\\Repository\\OrdersRepository' => ['privates', 'App\\Repository\\OrdersRepository', 'getOrdersRepositoryService', true],
            'App\\Repository\\PaymentRepository' => ['privates', 'App\\Repository\\PaymentRepository', 'getPaymentRepositoryService', true],
            'App\\Repository\\ProductRepository' => ['privates', 'App\\Repository\\ProductRepository', 'getProductRepositoryService', true],
            'App\\Repository\\ResetPasswordRequestRepository' => ['privates', 'App\\Repository\\ResetPasswordRequestRepository', 'getResetPasswordRequestRepositoryService', true],
            'App\\Repository\\ReviewsProductRepository' => ['privates', 'App\\Repository\\ReviewsProductRepository', 'getReviewsProductRepositoryService', true],
            'App\\Repository\\SiteInformationRepository' => ['privates', 'App\\Repository\\SiteInformationRepository', 'getSiteInformationRepositoryService', true],
            'App\\Repository\\SliderRepository' => ['privates', 'App\\Repository\\SliderRepository', 'getSliderRepositoryService', true],
            'App\\Repository\\TransporterRepository' => ['privates', 'App\\Repository\\TransporterRepository', 'getTransporterRepositoryService', true],
            'App\\Repository\\UserRepository' => ['privates', 'App\\Repository\\UserRepository', 'getUserRepositoryService', true],
        ], [
            'App\\Repository\\AddressRepository' => '?',
            'App\\Repository\\CategoryRepository' => '?',
            'App\\Repository\\ColorRepository' => '?',
            'App\\Repository\\CommentsRepository' => '?',
            'App\\Repository\\ContactRepository' => '?',
            'App\\Repository\\GenderRepository' => '?',
            'App\\Repository\\Newsletters\\CategoriesRepository' => '?',
            'App\\Repository\\Newsletters\\NewslettersRepository' => '?',
            'App\\Repository\\Newsletters\\UsersRepository' => '?',
            'App\\Repository\\OrderDetailRepository' => '?',
            'App\\Repository\\OrderDetailsRepository' => '?',
            'App\\Repository\\OrderRepository' => '?',
            'App\\Repository\\OrdersRepository' => '?',
            'App\\Repository\\PaymentRepository' => '?',
            'App\\Repository\\ProductRepository' => '?',
            'App\\Repository\\ResetPasswordRequestRepository' => '?',
            'App\\Repository\\ReviewsProductRepository' => '?',
            'App\\Repository\\SiteInformationRepository' => '?',
            'App\\Repository\\SliderRepository' => '?',
            'App\\Repository\\TransporterRepository' => '?',
            'App\\Repository\\UserRepository' => '?',
        ])));
        $c->addCustomStringFunction('MATCH_AGAINST', 'App\\Extensions\\Doctrine\\MatchAgainst');

        $container->services['doctrine.orm.default_entity_manager'] = $instance = new \Doctrine\ORM\EntityManager($a, $c, $b);

        (new \Doctrine\Bundle\DoctrineBundle\ManagerConfigurator([], []))->configure($instance);

        return $instance;
    }
}
