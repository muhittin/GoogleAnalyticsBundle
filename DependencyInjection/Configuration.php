<?php

namespace ATL15\GoogleAnalyticsBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\Builder\ArrayNodeDefinition;
use Symfony\Component\Config\Definition\ConfigurationInterface;

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

        $drivers = array("oauth2", "basicauth");

        $rootNode->children()
                    ->scalarNode('driver')
                        ->validate()
                            ->ifNotInArray($drivers)
                            ->thenInvalid('The driver %s is not supported. Please choose one of '.json_encode($drivers))
                        ->end()
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                    ->scalarNode('analytics_account')
                        ->isRequired()
                        ->cannotBeEmpty()
                    ->end()
                ->end();

        $this->setBasicAuthParameters($rootNode);
        $this->setOAuthParameters($rootNode);

        return $treeBuilder;
    }

    private function setBasicAuthParameters(ArrayNodeDefinition $node) {
        $node
            ->children()
                ->scalarNode('username')
                ->end()
                ->scalarNode('password')
                ->end()
            ->end();
    }

    private function setOAuthParameters(ArrayNodeDefinition $node) {
        $node
            ->children()
                ->scalarNode('app_name')
                ->end()
                ->scalarNode('client_id')
                ->end()
                ->scalarNode('client_secret')
                ->end()
                ->scalarNode('developer_key')
                ->end()
                ->scalarNode('redirect_uri')
                ->end()
            ->end();
    }
}
