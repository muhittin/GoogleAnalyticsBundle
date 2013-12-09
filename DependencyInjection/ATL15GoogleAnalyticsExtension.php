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

        if($config["driver"] == "basicauth") {
            $this->setBasicAuthParameters($container, $config);
        } elseif($config["driver"] == "oauth2") {
            $this->setOAuthParameters($container, $config);
        }
    }

    private function setBasicAuthParameters($container, $config) {
        $basicAuthParameters = array('driver', 'username', 'password', 'analytics_account');
        $analytics_parameters = array();
        foreach ($basicAuthParameters as $attribute) {
            if(!isset($config[$attribute])) {
                throw new \Exception($attribute. " parameter is required.");
            }
            $analytics_parameters[$attribute] = $config[$attribute];
        }
        $container->setParameter("analytics_driver_class", "ATL15\GoogleAnalyticsBundle\Controller\GoogleAnalyticsBasicAuthController");
        $container->setParameter("analytics_parameters", $analytics_parameters);
    }

    private function setOAuthParameters($container, $config) {
        $oAuthParameters = array('driver', 'app_name', 'client_id', 'client_secret', 'developer_key', 'redirect_uri', 'analytics_account');
        $analytics_parameters = array();
        foreach ($oAuthParameters as $attribute) {
            if(!isset($config[$attribute])) {
                throw new \Exception($attribute. " parameter is required.");
            }
            $analytics_parameters[$attribute] = $config[$attribute];
        }
        $container->setParameter("analytics_driver_class", "ATL15\GoogleAnalyticsBundle\Controller\GoogleAnalyticsOAuthController");
        $container->setParameter("analytics_parameters", $analytics_parameters);
    }
}