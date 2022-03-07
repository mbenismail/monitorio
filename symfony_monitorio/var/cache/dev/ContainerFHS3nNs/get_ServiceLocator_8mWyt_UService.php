<?php

namespace ContainerFHS3nNs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8mWyt_UService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8mWyt.U' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8mWyt.U'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'profilRepository' => ['privates', 'App\\Repository\\ProfilRepository', 'getProfilRepositoryService', true],
        ], [
            'profilRepository' => 'App\\Repository\\ProfilRepository',
        ]);
    }
}
