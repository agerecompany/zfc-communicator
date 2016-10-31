<?php
/**
 * @package VisitListenerFactory.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 24.10.2016 14:13
 */
namespace Agere\Communicator\Listener\Factory;

use Agere\Communicator\Listener\CreateVisitListener;
use Agere\Communicator\Service\CommunicatorService;
use Agere\User\Service\UserService;
use Interop\Container\ContainerInterface;

class CreateVisitListenerFactory
{
    public function __invoke(ContainerInterface $container)
    {
        /** @var UserService $userService */
        $userService = $container->has('UserService') ? $container->get('UserService') : null;
        /** @var CommunicatorService $communicatorService*/
        $communicatorService = $container->has('CommunicatorService') ? $container->get('CommunicatorService') : null;
        $listener = new CreateVisitListener($userService, $communicatorService);

        return $listener;
    }
}