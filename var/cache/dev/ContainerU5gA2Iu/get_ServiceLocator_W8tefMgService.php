<?php

namespace ContainerU5gA2Iu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_W8tefMgService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.W8tefMg' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.W8tefMg'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'manager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'serializer' => ['services', 'serializer', 'getSerializerService', false],
            'validator' => ['privates', 'api_platform.validator', 'getApiPlatform_ValidatorService', true],
        ], [
            'manager' => '?',
            'serializer' => '?',
            'validator' => '?',
        ]);
    }
}