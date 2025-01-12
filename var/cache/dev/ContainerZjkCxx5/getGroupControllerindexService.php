<?php

namespace ContainerZjkCxx5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGroupControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.2XaVhYa.App\Controller\GroupController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.2XaVhYa.App\\Controller\\GroupController::index()'] = (new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'groupRepository' => ['privates', 'App\\Repository\\GroupRepository', 'getGroupRepositoryService', true],
        ], [
            'groupRepository' => 'App\\Repository\\GroupRepository',
        ]))->withContext('App\\Controller\\GroupController::index()', $container);
    }
}
