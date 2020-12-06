<?php

namespace Terminal42\CashctrlBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree builder.
     *
     * @return TreeBuilder The tree builder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder('terminal42_cashctrl');

        $treeBuilder->getRootNode()
            ->children()
                ->scalarNode('subdomain')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->info('Your Cashctrl.com subdomain.')
                ->end()
                ->scalarNode('api_key')
                    ->isRequired()
                    ->cannotBeEmpty()
                    ->info('Your Cashctrl.com API Key.')
                ->end()
                ->booleanNode('throttle')
                    ->info('Automatically throttle API client to prevent too many requests.')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
