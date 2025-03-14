<?php

declare(strict_types=1);

namespace Terminal42\CashctrlBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\HttpKernel\DependencyInjection\ConfigurableExtension;
use Terminal42\CashctrlApi\ApiClient;

class Terminal42CashctrlExtension extends ConfigurableExtension
{
    /**
     * Configures the passed container according to the merged configuration.
     *
     * @param array{throttle: bool, subdomain: string, api_key: string} $mergedConfig
     */
    protected function loadInternal(array $mergedConfig, ContainerBuilder $container): void
    {
        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../../config'),
        );

        $loader->load('services.yml');

        if ($mergedConfig['throttle']) {
            $container->getDefinition(ApiClient::class)->addMethodCall('enableAutoThrottle');
        }

        $container->setParameter('terminal42_cashctrl.subdomain', $mergedConfig['subdomain']);
        $container->setParameter('terminal42_cashctrl.api_key', $mergedConfig['api_key']);
    }
}
