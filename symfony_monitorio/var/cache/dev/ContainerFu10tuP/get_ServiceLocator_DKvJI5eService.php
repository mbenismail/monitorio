<?php

namespace ContainerFu10tuP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_DKvJI5eService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.dKvJI5e' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.dKvJI5e'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManager' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'permissionRepository' => ['privates', 'App\\Repository\\PermissionRepository', 'getPermissionRepositoryService', true],
        ], [
            'entityManager' => '?',
            'permissionRepository' => 'App\\Repository\\PermissionRepository',
        ]);
    }
}
