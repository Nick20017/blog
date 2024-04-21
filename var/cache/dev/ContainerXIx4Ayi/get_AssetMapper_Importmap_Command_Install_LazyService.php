<?php

namespace ContainerXIx4Ayi;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_AssetMapper_Importmap_Command_Install_LazyService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.asset_mapper.importmap.command.install.lazy' shared service.
     *
     * @return \Symfony\Component\Console\Command\LazyCommand
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'Command.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Command'.\DIRECTORY_SEPARATOR.'LazyCommand.php';

        return $container->privates['.asset_mapper.importmap.command.install.lazy'] = new \Symfony\Component\Console\Command\LazyCommand('importmap:install', [], 'Download all assets that should be downloaded', false, #[\Closure(name: 'asset_mapper.importmap.command.install', class: 'Symfony\\Component\\AssetMapper\\Command\\ImportMapInstallCommand')] fn (): \Symfony\Component\AssetMapper\Command\ImportMapInstallCommand => ($container->privates['asset_mapper.importmap.command.install'] ?? $container->load('getAssetMapper_Importmap_Command_InstallService')));
    }
}
