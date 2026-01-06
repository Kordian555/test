<?php
namespace Kordian\TranscrifyBundle;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
//use Symfony\Yaml\DependencyInjection\Loader;

class TranscrifyBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $loader = new YamlFileLoader($builder, new FileLocator( '/Users/kordian/projects/transcrify/transcrify-backend-api/vendor/kordian/test/config/bundles'));
        $loader->load('services.yaml');
    }
}