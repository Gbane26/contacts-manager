<?php

namespace Container6Aw2R6S;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.9PXtK08.App\Controller\GroupController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.9PXtK08.App\\Controller\\GroupController::delete()'] = ($container->privates['.service_locator.9PXtK08'] ?? $container->load('get_ServiceLocator_9PXtK08Service'))->withContext('App\\Controller\\GroupController::delete()', $container);
    }
}