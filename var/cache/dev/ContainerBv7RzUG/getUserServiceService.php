<?php

namespace ContainerBv7RzUG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getUserServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Service\UserService' shared autowired service.
     *
     * @return \App\Service\UserService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/src/Service/UserService.php';

        return $container->privates['App\\Service\\UserService'] = new \App\Service\UserService(($container->services['serializer'] ?? $container->getSerializerService()), ($container->privates['api_platform.validator'] ?? $container->load('getApiPlatform_ValidatorService')), ($container->services['security.password_encoder'] ?? $container->load('getSecurity_PasswordEncoderService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()));
    }
}