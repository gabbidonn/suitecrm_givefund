<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getApiPlatform_Graphql_Action_GraphiqlService extends App_KernelProdContainer
{
    /*
     * Gets the public 'api_platform.graphql.action.graphiql' shared service.
     *
     * @return \ApiPlatform\Core\GraphQl\Action\GraphiQlAction
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/vendor/api-platform/core/src/GraphQl/Action/GraphiQlAction.php';

        return $container->services['api_platform.graphql.action.graphiql'] = new \ApiPlatform\Core\GraphQl\Action\GraphiQlAction(($container->services['.container.private.twig'] ?? $container->load('get_Container_Private_TwigService')), ($container->privates['api_platform.router'] ?? $container->getApiPlatform_RouterService()), true, '', NULL);
    }
}