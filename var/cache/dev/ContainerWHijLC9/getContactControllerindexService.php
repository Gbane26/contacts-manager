<?php

namespace ContainerWHijLC9;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerindexService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.nOWGAsF.App\Controller\ContactController::index()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.nOWGAsF.App\\Controller\\ContactController::index()'] = ($container->privates['.service_locator.nOWGAsF'] ?? $container->load('get_ServiceLocator_NOWGAsFService'))->withContext('App\\Controller\\ContactController::index()', $container);
    }
}