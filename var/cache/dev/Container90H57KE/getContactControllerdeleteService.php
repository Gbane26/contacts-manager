<?php

namespace Container90H57KE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllerdeleteService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G5VbT8f.App\Controller\ContactController::delete()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.G5VbT8f.App\\Controller\\ContactController::delete()'] = ($container->privates['.service_locator.G5VbT8f'] ?? $container->load('get_ServiceLocator_G5VbT8fService'))->withContext('App\\Controller\\ContactController::delete()', $container);
    }
}
