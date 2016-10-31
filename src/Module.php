<?php
namespace Agere\Communicator;

use Zend\Mvc\MvcEvent;
use Agere\Visit\Listener\VisitListener;
use Zend\EventManager\EventInterface;

class Module {

	public function getConfig()
	{
		return include __DIR__ . '/../config/module.config.php';
	}

	public function onBootstrap(EventInterface $e) {
		$eventManager = $e->getTarget()->getEventManager();
		$sm = $e->getApplication()->getServiceManager();

		//$eventManager->attach((new Listener\VisitListener())->setServiceLocator($sm));
		$eventManager->attach(MvcEvent::EVENT_DISPATCH, function() use($sm, $eventManager) {
			$eventManager->attach($sm->get(Listener\CreateVisitListener::class));
		}, 100);


	}
}