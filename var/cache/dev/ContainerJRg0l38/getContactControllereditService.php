<?php

namespace ContainerJRg0l38;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getContactControllereditService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.G5VbT8f.App\Controller\ContactController::edit()' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        $a = ($container->privates['.service_locator.G5VbT8f'] ?? $container->load('get_ServiceLocator_G5VbT8fService'));

        if (isset($container->privates['.service_locator.G5VbT8f.App\\Controller\\ContactController::edit()'])) {
            return $container->privates['.service_locator.G5VbT8f.App\\Controller\\ContactController::edit()'];
        }

        return $container->privates['.service_locator.G5VbT8f.App\\Controller\\ContactController::edit()'] = $a->withContext('App\\Controller\\ContactController::edit()', $container);
    }
}
