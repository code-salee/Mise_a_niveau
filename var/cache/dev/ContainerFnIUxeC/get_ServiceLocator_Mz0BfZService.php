<?php

namespace ContainerFnIUxeC;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Mz0BfZService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Mz0BfZ_' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Mz0BfZ_'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'User' => ['privates', 'App\\Service\\UserService', 'getUserServiceService', true],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
        ], [
            'User' => 'App\\Service\\UserService',
            'serializer' => '?',
        ]);
    }
}
