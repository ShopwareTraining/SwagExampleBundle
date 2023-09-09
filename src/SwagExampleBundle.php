<?php declare(strict_types=1);

namespace SwagExampleBundle;

use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

class SwagExampleBundle extends \Shopware\Core\Framework\Bundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $loader = new XmlFileLoader($builder, new FileLocator(__DIR__.'/Resources/config'));
        $loader->load('services.xml');
    }

    public function configureRoutes(RoutingConfigurator $routes, string $environment): void
    {
        $routes->import(__DIR__ . '/Resources/config/routes.xml');
    }
}