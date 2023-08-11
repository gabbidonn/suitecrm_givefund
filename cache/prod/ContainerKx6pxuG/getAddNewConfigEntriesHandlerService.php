<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getAddNewConfigEntriesHandlerService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Install\LegacyHandler\Upgrade\AddNewConfigEntriesHandler' shared autowired service.
     *
     * @return \App\Install\LegacyHandler\Upgrade\AddNewConfigEntriesHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Install/LegacyHandler/Upgrade/AddNewConfigEntriesHandler.php';

        return $container->privates['App\\Install\\LegacyHandler\\Upgrade\\AddNewConfigEntriesHandler'] = new \App\Install\LegacyHandler\Upgrade\AddNewConfigEntriesHandler(\dirname(__DIR__, 3), (\dirname(__DIR__, 3).'/public/legacy'), 'LEGACYSESSID', 'PHPSESSID', ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] ?? ($container->privates['App\\Engine\\LegacyHandler\\LegacyScopeState'] = new \App\Engine\LegacyHandler\LegacyScopeState())), ($container->services['session'] ?? $container->getSessionService()), ($container->services['app.system-configs'] ?? $container->getApp_SystemconfigsService()));
    }
}
