<?php

namespace ContainerYkohy9C;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_XViQQEuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.xViQQEu' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.xViQQEu'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.nOWGAsF.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\ContactController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\ContactController::new()', 'getContactControllernewService', true],
            'App\\Controller\\ContactController::show' => ['privates', '.service_locator.YSadlPJ.App\\Controller\\ContactController::show()', 'getContactControllershowService', true],
            'App\\Controller\\ContactController::edit' => ['privates', '.service_locator.G5VbT8f.App\\Controller\\ContactController::edit()', 'getContactControllereditService', true],
            'App\\Controller\\ContactController::delete' => ['privates', '.service_locator.G5VbT8f.App\\Controller\\ContactController::delete()', 'getContactControllerdeleteService', true],
            'App\\Controller\\ContactController::search' => ['privates', '.service_locator.egipcEH.App\\Controller\\ContactController::search()', 'getContactControllersearchService', true],
            'App\\Controller\\CustomFieldsController::show' => ['privates', '.service_locator.jeDDFx6.App\\Controller\\CustomFieldsController::show()', 'getCustomFieldsControllershowService', true],
            'App\\Controller\\GroupController::index' => ['privates', '.service_locator.2XaVhYa.App\\Controller\\GroupController::index()', 'getGroupControllerindexService', true],
            'App\\Controller\\GroupController::new' => ['privates', '.service_locator.egipcEH.App\\Controller\\GroupController::new()', 'getGroupControllernewService', true],
            'App\\Controller\\GroupController::show' => ['privates', '.service_locator.FobyIDP.App\\Controller\\GroupController::show()', 'getGroupControllershowService', true],
            'App\\Controller\\GroupController::edit' => ['privates', '.service_locator.9PXtK08.App\\Controller\\GroupController::edit()', 'getGroupControllereditService', true],
            'App\\Controller\\GroupController::delete' => ['privates', '.service_locator.9PXtK08.App\\Controller\\GroupController::delete()', 'getGroupControllerdeleteService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.zHyJIs5.kernel::registerContainerConfiguration()', 'get_ServiceLocator_ZHyJIs5_KernelregisterContainerConfigurationService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.zHyJIs5.kernel::loadRoutes()', 'get_ServiceLocator_ZHyJIs5_KernelloadRoutesService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.nOWGAsF.App\\Controller\\ContactController::index()', 'getContactControllerindexService', true],
            'App\\Controller\\ContactController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\ContactController::new()', 'getContactControllernewService', true],
            'App\\Controller\\ContactController:show' => ['privates', '.service_locator.YSadlPJ.App\\Controller\\ContactController::show()', 'getContactControllershowService', true],
            'App\\Controller\\ContactController:edit' => ['privates', '.service_locator.G5VbT8f.App\\Controller\\ContactController::edit()', 'getContactControllereditService', true],
            'App\\Controller\\ContactController:delete' => ['privates', '.service_locator.G5VbT8f.App\\Controller\\ContactController::delete()', 'getContactControllerdeleteService', true],
            'App\\Controller\\ContactController:search' => ['privates', '.service_locator.egipcEH.App\\Controller\\ContactController::search()', 'getContactControllersearchService', true],
            'App\\Controller\\CustomFieldsController:show' => ['privates', '.service_locator.jeDDFx6.App\\Controller\\CustomFieldsController::show()', 'getCustomFieldsControllershowService', true],
            'App\\Controller\\GroupController:index' => ['privates', '.service_locator.2XaVhYa.App\\Controller\\GroupController::index()', 'getGroupControllerindexService', true],
            'App\\Controller\\GroupController:new' => ['privates', '.service_locator.egipcEH.App\\Controller\\GroupController::new()', 'getGroupControllernewService', true],
            'App\\Controller\\GroupController:show' => ['privates', '.service_locator.FobyIDP.App\\Controller\\GroupController::show()', 'getGroupControllershowService', true],
            'App\\Controller\\GroupController:edit' => ['privates', '.service_locator.9PXtK08.App\\Controller\\GroupController::edit()', 'getGroupControllereditService', true],
            'App\\Controller\\GroupController:delete' => ['privates', '.service_locator.9PXtK08.App\\Controller\\GroupController::delete()', 'getGroupControllerdeleteService', true],
        ], [
            'kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\ContactController::new' => '?',
            'App\\Controller\\ContactController::show' => '?',
            'App\\Controller\\ContactController::edit' => '?',
            'App\\Controller\\ContactController::delete' => '?',
            'App\\Controller\\ContactController::search' => '?',
            'App\\Controller\\CustomFieldsController::show' => '?',
            'App\\Controller\\GroupController::index' => '?',
            'App\\Controller\\GroupController::new' => '?',
            'App\\Controller\\GroupController::show' => '?',
            'App\\Controller\\GroupController::edit' => '?',
            'App\\Controller\\GroupController::delete' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:loadRoutes' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\ContactController:new' => '?',
            'App\\Controller\\ContactController:show' => '?',
            'App\\Controller\\ContactController:edit' => '?',
            'App\\Controller\\ContactController:delete' => '?',
            'App\\Controller\\ContactController:search' => '?',
            'App\\Controller\\CustomFieldsController:show' => '?',
            'App\\Controller\\GroupController:index' => '?',
            'App\\Controller\\GroupController:new' => '?',
            'App\\Controller\\GroupController:show' => '?',
            'App\\Controller\\GroupController:edit' => '?',
            'App\\Controller\\GroupController:delete' => '?',
        ]);
    }
}
