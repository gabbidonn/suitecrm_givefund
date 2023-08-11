<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSystemConfigCollectionDataProviderService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\SystemConfig\DataProvider\SystemConfigCollectionDataProvider' shared autowired service.
     *
     * @return \App\SystemConfig\DataProvider\SystemConfigCollectionDataProvider
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/SystemConfig/DataProvider/SystemConfigCollectionDataProvider.php';

        return $container->privates['App\\SystemConfig\\DataProvider\\SystemConfigCollectionDataProvider'] = new \App\SystemConfig\DataProvider\SystemConfigCollectionDataProvider(($container->services['app.system-configs'] ?? $container->getApp_SystemconfigsService()));
    }
}
