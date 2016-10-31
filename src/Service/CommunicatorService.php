<?php
/**
 * @package CommunicatorService.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 21.10.2016 15:31
 */

namespace Agere\Communicator\Service;

use Agere\Communicator\Model\Communicator;
use Agere\Core\Service\DomainServiceAbstract;
use Agere\User\Service\UserService;

class CommunicatorService extends DomainServiceAbstract
{
    protected $entity = Communicator::class;

    public function save($visit, $item, $user)
    {
        $startAt = \DateTime::createFromFormat('Y-m-d H:i', $visit['plannedAt']);
        $endedAt = \DateTime::createFromFormat('Y-m-d H:i', $visit['plannedEndAt']);

        //$userService = $sm->get('UserService');
        //$user = $userService->find($id = (int) $visit['user']);
        $communicator = $this->getObjectModel();
        $communicator->setStartedAt($startAt);
        $communicator->setEndedAt($endedAt);
        $communicator->setSubject($user->getMnemo());
        $communicator->setDescription($item->getPatient()->getFio());

        $om = $this->getObjectManager();
        $om->persist($communicator);
        $om->flush();
    }
}