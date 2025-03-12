<?php

declare(strict_types=1);

namespace Terminal42\CashctrlBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    public function getConfigTreeBuilder(): TreeBuilder
    {
        $treeBuilder = new TreeBuilder('terminal42_cashctrl');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('subdomain')
                    ->cannotBeEmpty()
                    ->defaultValue('%env(CASHCTRL_SUBDOMAIN)%')
                    ->info('Your Cashctrl.com subdomain.')
                ->end()
                ->scalarNode('api_key')
                    ->cannotBeEmpty()
                    ->defaultValue('%env(CASHCTRL_APIKEY)%')
                    ->info('Your Cashctrl.com API Key.')
                ->end()
                ->booleanNode('throttle')
                    ->info('Automatically throttle API client to prevent too many requests.')
                    ->defaultTrue()
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
