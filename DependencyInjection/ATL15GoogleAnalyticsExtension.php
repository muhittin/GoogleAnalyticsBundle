<?php

namespace ATL15\GoogleAnalyticsBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Symfony\Component\DependencyInjection\Loader;

/**
 * This is the class that loads and manages your bundle configuration
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html}
 */
class ATL15GoogleAnalyticsExtension extends Extension
{
    /**
     * {@inheritDoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);


        $loader = new Loader\YamlFileLoader($container, new FileLocator(__DIR__.'/../Resources/config'));

        foreach (array('config','services') as $basename) {
            $loader->load(sprintf('%s.yml', $basename));
        }

        foreach (array('app_name', 'client_id', 'client_secret', 'developer_key', 'redirect_uri', 'analytics_account') as $attribute) {
            $container->setParameter($attribute, $config[$attribute]);
        }
    }
}