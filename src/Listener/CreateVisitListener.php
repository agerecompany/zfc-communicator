<?php
/**
 * @package CreateVisitListener.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 21.10.2016 14:56
 */

namespace Agere\Communicator\Listener;

use Zend\ServiceManager\ServiceLocatorAwareTrait;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;

use Agere\Communicator\Service\CommunicatorService;
use Agere\Visit\Controller\VisitController;

class CreateVisitListener implements ListenerAggregateInterface {

    use ListenerAggregateTrait;
    use ServiceLocatorAwareTrait;

    public function attach(EventManagerInterface $events) {
        $sm = $this->getServiceLocator();
        $sem = $events->getSharedManager(); // shared events manager

        $this->listeners[] = $sem->attach(VisitController::class, 'eventEditVisit', function($e) use($sm) {
            $item = $e->getTarget();
            $visit = $e->getParam('visit');
            $plannedAt = $visit['plannedAt'];
            $plannedEndAt = $visit['plannedEndAt'];
            //$oldStatus = $e->getParam('oldStatus');
            /** @var CommunicatorService $communicatorService */
            $communicatorService = $sm->get('CommunicatorService');
            $communicatorService->save($visit, $item, $sm);

        }, 100);
    }
}
