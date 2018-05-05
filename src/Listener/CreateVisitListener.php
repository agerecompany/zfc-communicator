<?php
/**
 * @package CreateVisitListener.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 21.10.2016 14:56
 */
namespace Agere\Communicator\Listener;

use Zend\EventManager\EventManagerInterface;
use Zend\EventManager\ListenerAggregateInterface;
use Zend\EventManager\ListenerAggregateTrait;
use Zend\EventManager\Event;
use Agere\Communicator\Service\CommunicatorService;
use Popov\ZfcUser\Service\UserService;
use Agere\Visit\Controller\VisitController;

class CreateVisitListener /*implements ListenerAggregateInterface*/
{
    //use ListenerAggregateTrait;

    public function __construct(UserService $userService, CommunicatorService $communicatorService)
    {
        $this->userService = $userService;
        $this->communicatorService = $communicatorService;
    }

    /**
     * @return UserService
     */
    public function getUserService()
    {
        return $this->userService;
    }

    /**
     * @return CommunicatorService
     */
    public function getCommunicatorService()
    {
        return $this->communicatorService;
    }

    /*public function attach(EventManagerInterface $events)
    {
        $sem = $events->getSharedManager(); // shared events manager
        $this->listeners[] = $sem->attach(VisitController::class, 'createVisit', function (Event $e) {
            $item = $e->getTarget();
            $visit = $e->getParam('visit');
            $user = $this->getUserService()->find($id = (int) $visit['user']);
            $this->getCommunicatorService()->save($visit, $item, $user);
        }, 100
        );
    }*/

    public function onCreateVisit($e)
    {
        $item = $e->getTarget();
        $visit = $e->getParam('visit');
        $user = $this->getUserService()->find($id = (int) $visit['user']);
        /** @var CommunicatorService $communicatorService */
        $this->getCommunicatorService()->save($visit, $item, $user);
    }
}
