<?php

namespace ContainerB5K5FJA;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProductsControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\ProductsController' shared autowired service.
     *
     * @return \App\Controller\ProductsController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/ProductsController.php';

        $container->services['App\\Controller\\ProductsController'] = $instance = new \App\Controller\ProductsController();

        $instance->setContainer(($container->privates['.service_locator.O2p6Lk7'] ?? $container->load('get_ServiceLocator_O2p6Lk7Service'))->withContext('App\\Controller\\ProductsController', $container));

        return $instance;
    }
}
