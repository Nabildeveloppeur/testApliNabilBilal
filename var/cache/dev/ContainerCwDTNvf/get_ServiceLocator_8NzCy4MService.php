<?php

namespace ContainerCwDTNvf;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_8NzCy4MService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.8NzCy4M' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.8NzCy4M'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'utilisateur' => ['privates', '.errored..service_locator.8NzCy4M.App\\Entity\\Utilisateur', NULL, 'Cannot autowire service ".service_locator.8NzCy4M": it needs an instance of "App\\Entity\\Utilisateur" but this type has been excluded in "config/services.yaml".'],
        ], [
            'utilisateur' => 'App\\Entity\\Utilisateur',
        ]);
    }
}
