<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getModStringsHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Languages\LegacyHandler\ModStringsHandler' shared autowired service.
     *
     * @return \App\Languages\LegacyHandler\ModStringsHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Languages/LegacyHandler/ModStringsHandler.php';

        return $container->privates['App\\Languages\\LegacyHandler\\ModStringsHandler'] = new \App\Languages\LegacyHandler\ModStringsHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->privates['App\\Module\\LegacyHandler\\ModuleNameMapperHandler'] ?? $container->getModuleNameMapperHandlerService()), ($container->privates['App\\Module\\LegacyHandler\\ModuleRegistryHandler'] ?? $container->getModuleRegistryHandlerService()), ($container->services['session'] ?? $container->getSessionService()));
    }
}
