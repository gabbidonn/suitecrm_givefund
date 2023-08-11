<?php

namespace ContainerKx6pxuG;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCreateButtonMapperService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\ViewDefinitions\LegacyHandler\Subpanel\CreateButtonMapper' shared autowired service.
     *
     * @return \App\ViewDefinitions\LegacyHandler\Subpanel\CreateButtonMapper
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 3).'/core/backend/Module/Service/ModuleAwareRegistryItemInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/SubpanelButtonMapperInterface.php';
        include_once \dirname(__DIR__, 3).'/core/backend/ViewDefinitions/LegacyHandler/Subpanel/CreateButtonMapper.php';

        return $container->privates['App\\ViewDefinitions\\LegacyHandler\\Subpanel\\CreateButtonMapper'] = new \App\ViewDefinitions\LegacyHandler\Subpanel\CreateButtonMapper(($container->privates['App\\FieldDefinitions\\LegacyHandler\\FieldDefinitionsHandler'] ?? $container->load('getFieldDefinitionsHandlerService')));
    }
}
