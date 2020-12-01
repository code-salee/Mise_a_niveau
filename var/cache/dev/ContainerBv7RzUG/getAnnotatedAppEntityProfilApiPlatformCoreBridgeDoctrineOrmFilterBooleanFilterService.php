<?php

namespace ContainerBv7RzUG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAnnotatedAppEntityProfilApiPlatformCoreBridgeDoctrineOrmFilterBooleanFilterService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'annotated_app_entity_profil_api_platform_core_bridge_doctrine_orm_filter_boolean_filter' shared autowired service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Api/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/FilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/PropertyHelperTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/ContextAwareFilterInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/AbstractContextAwareFilter.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Common/Filter/BooleanFilterTrait.php';
        include_once \dirname(__DIR__, 4).'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Filter/BooleanFilter.php';

        return $container->privates['annotated_app_entity_profil_api_platform_core_bridge_doctrine_orm_filter_boolean_filter'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\BooleanFilter(($container->services['doctrine'] ?? $container->getDoctrineService()), NULL, ($container->privates['monolog.logger'] ?? $container->getMonolog_LoggerService()), ['isDeleted' => NULL], ($container->privates['serializer.name_converter.metadata_aware'] ?? $container->getSerializer_NameConverter_MetadataAwareService()));
    }
}
