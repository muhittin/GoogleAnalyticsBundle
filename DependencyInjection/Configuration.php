<?php

namespace ATL15\GoogleAnalyticsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder,
    Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * Generates the configuration tree.
     *
     * @return TreeBuilder
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('atl15_google_analytics');

        $rootNode->children()
                    ->scalarNode('app_name')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                    ->scalarNode('client_id')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                    ->scalarNode('client_secret')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                    ->scalarNode('developer_key')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                    ->scalarNode('redirect_uri')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                    ->scalarNode('analytics_account')
                        ->isRequired()
                        ->cannotBeEmpty()
                        ->end()
                ->end();

        //var_dump($rootNode); die;

        return $treeBuilder;
    }
}
