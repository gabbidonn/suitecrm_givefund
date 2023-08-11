<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMonolog_Logger_InstallService extends App_KernelProdContainer
{
    /*
     * Gets the public 'monolog.logger.install' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->services['monolog.logger.install'] = $instance = new \Symfony\Bridge\Monolog\Logger('install');

        $instance->pushHandler(($container->privates['monolog.handler.console'] ?? $container->getMonolog_Handler_ConsoleService()));
        $instance->pushHandler(($container->privates['monolog.handler.main'] ?? $container->getMonolog_Handler_MainService()));
        $instance->pushHandler(($container->privates['monolog.handler.install'] ?? $container->load('getMonolog_Handler_InstallService')));

        return $instance;
    }
}
