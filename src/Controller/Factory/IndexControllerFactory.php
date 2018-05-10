<?php
/**
 * Reader Controller Factory
 *
 * @category Agere
 * @package Agere_Reader
 * @author Kozak Vlad <vk@agere.com.ua>
 * @datetime: 16.05.2016 1:19
 */
namespace Agere\Communicator\Controller\Factory;

use Agere\Communicator\Controller\IndexController;
use Psr\Container\ContainerInterface;

class IndexControllerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        $config = $container->get('config');
        $controller = new IndexController($config);

        return $controller;
    }
}
