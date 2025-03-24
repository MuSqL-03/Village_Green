<?php

namespace ContainerRLv3sex;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Debug_ValueResolver_ApiPlatform_ArgumentResolver_PayloadService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.debug.value_resolver.api_platform.argument_resolver.payload' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/http-kernel/Controller/ArgumentResolver/TraceableValueResolver.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/symfony/Bundle/ArgumentResolver/CompatibleValueResolverInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/state/Util/OperationRequestInitiatorTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/symfony/Bundle/ArgumentResolver/PayloadArgumentResolver.php';

        $a = ($container->privates['api_platform.metadata.resource.metadata_collection_factory.cached'] ?? self::getApiPlatform_Metadata_Resource_MetadataCollectionFactory_CachedService($container));

        if (isset($container->privates['.debug.value_resolver.api_platform.argument_resolver.payload'])) {
            return $container->privates['.debug.value_resolver.api_platform.argument_resolver.payload'];
        }
        $b = ($container->privates['api_platform.openapi.serializer_context_builder'] ?? $container->load('getApiPlatform_Openapi_SerializerContextBuilderService'));

        if (isset($container->privates['.debug.value_resolver.api_platform.argument_resolver.payload'])) {
            return $container->privates['.debug.value_resolver.api_platform.argument_resolver.payload'];
        }

        return $container->privates['.debug.value_resolver.api_platform.argument_resolver.payload'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver(new \ApiPlatform\Symfony\Bundle\ArgumentResolver\PayloadArgumentResolver($a, $b), ($container->services['debug.stopwatch'] ??= new \Symfony\Component\Stopwatch\Stopwatch(true)));
    }
}
