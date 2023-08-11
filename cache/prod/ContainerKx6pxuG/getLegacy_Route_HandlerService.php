<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getLegacy_Route_HandlerService extends App_KernelProdContainer
{
    /*
     * Gets the public 'legacy.route.handler' shared autowired service.
     *
     * @return \App\Routes\Service\LegacyRouteHandler
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Routes/Service/LegacyRouteHandler.php';

        return $container->services['legacy.route.handler'] = new \App\Routes\Service\LegacyRouteHandler(($container->privates['App\\Routes\\Service\\LegacyApiRedirectHandler'] ?? $container->getLegacyApiRedirectHandlerService()), ($container->privates['App\\Routes\\Service\\LegacyNonViewActionRedirectHandler'] ?? $container->getLegacyNonViewActionRedirectHandlerService()), ($container->privates['App\\Routes\\Service\\LegacyAssetRedirectHandler'] ?? $container->getLegacyAssetRedirectHandlerService()));
    }
}