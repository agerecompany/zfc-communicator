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

class IndexControllerFactory
{
    public function __invoke($cm)
    {
        $sm = $cm->getServiceLocator();
        $controller = new IndexController();
        $controller->setServiceManager($sm);

        return $controller;
    }
}
