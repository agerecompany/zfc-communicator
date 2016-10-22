<?php
namespace Agere\Communicator;

use Zend\EventManager\EventInterface;

class Module {

	public function getConfig()
	{
		return include __DIR__ . '/../config/module.config.php';
	}

	public function onBootstrap(EventInterface $e) {
		$eventManager = $e->getTarget()->getEventManager();
		$sm = $e->getApplication()->getServiceManager();

		$eventManager->attach((new Listener\CreateVisitListener())->setServiceLocator($sm));

	}
}