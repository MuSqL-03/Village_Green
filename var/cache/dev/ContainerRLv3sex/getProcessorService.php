<?php

namespace ContainerRLv3sex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProcessorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'ApiPlatform\Symfony\Messenger\Processor' shared service.
     *
     * @return \ApiPlatform\Symfony\Messenger\Processor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/ProcessorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/symfony/Messenger/DispatchTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/symfony/Messenger/Processor.php';

        return $container->privates['ApiPlatform\\Symfony\\Messenger\\Processor'] = new \ApiPlatform\Symfony\Messenger\Processor(($container->services['messenger.default_bus'] ?? self::getMessenger_DefaultBusService($container)));
    }
}
