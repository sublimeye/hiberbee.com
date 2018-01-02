<?php

/**
 *
 *  * This file is part of the Hiberbee web application.
 *  *
 *  * (c) Vladyslav Volkov <vlad@hiberbee.com>
 *  *
 *  * For the full copyright and license information, please view the LICENSE
 *  * file that was distributed with this source code.
 *
 */

namespace App;

use Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Kernel as BaseKernel;
use Symfony\Component\Routing\RouteCollectionBuilder;

class Kernel extends BaseKernel
{
    use MicroKernelTrait;

    private const ROUTE_CONFIG_DIRECTORY_NAME = 'routes';

    const CONFIG_EXTS = '.{php,xml,yaml,yml}';

    public function getCacheDir()
    {
        return $this->getProjectDir() . '/var/cache/' . $this->environment;
    }

    public function getLogDir()
    {
        return $this->getProjectDir() . '/var/log';
    }

    public function registerBundles()
    {
        $contents = require $this->getProjectDir() . '/config/bundles.php';
        foreach ($contents as $class => $envs) {
            if (isset($envs['all']) || isset($envs[$this->environment])) {
                yield new $class();
            }
        }
    }

    protected function configureContainer(ContainerBuilder $container, LoaderInterface $loader)
    {
        $container->setParameter('container.dumper.inline_class_loader', true);
        $confDir = $this->getProjectDir() . '/config';
        $loader->load($confDir . '/packages/*' . self::CONFIG_EXTS, 'glob');
        if (is_dir($confDir . '/packages/' . $this->environment)) {
            $loader->load($confDir . '/packages/' . $this->environment . '/**/*' . self::CONFIG_EXTS, 'glob');
        }
        $loader->load($confDir . '/services' . self::CONFIG_EXTS, 'glob');
        $loader->load($confDir . '/services_' . $this->environment . self::CONFIG_EXTS, 'glob');
    }

    protected function configureRoutes(RouteCollectionBuilder $routes)
    {
        $confDir = $this->getProjectDir() . '/config';
        if (is_dir($confDir . DIRECTORY_SEPARATOR . self::ROUTE_CONFIG_DIRECTORY_NAME . DIRECTORY_SEPARATOR)) {
            $routes->import($confDir . '/routes/*' . self::CONFIG_EXTS, '/', 'glob');
        }
        if (is_dir($confDir . DIRECTORY_SEPARATOR . self::ROUTE_CONFIG_DIRECTORY_NAME . DIRECTORY_SEPARATOR . $this->environment)) {
            $routes->import($confDir . DIRECTORY_SEPARATOR . self::ROUTE_CONFIG_DIRECTORY_NAME . DIRECTORY_SEPARATOR . $this->environment . '/**/*' . self::CONFIG_EXTS, '/', 'glob');
        }
        $routes->import($confDir . DIRECTORY_SEPARATOR . self::ROUTE_CONFIG_DIRECTORY_NAME . self::CONFIG_EXTS, '/', 'glob');
    }
}
