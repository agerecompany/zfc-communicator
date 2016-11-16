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
        $startAt = \DateTime::createFromFormat('d.m.Y H:i', $visit['plannedAt']);
        $endedAt = \DateTime::createFromFormat('d.m.Y H:i', $visit['plannedEndAt']);
        //$userService = $sm->get('UserService');
        //$user = $userService->find($id = (int) $visit['user']);
        $communicator = $this->getObjectModel();
        $communicator->setStartedAt($startAt);
        $communicator->setEndedAt($endedAt);
        $communicator->setSubject($user->getMnemo());
        $communicator->setDescription($item->getPatient()->getFio());
        $communicator->setDiagnosis($visit['diagnosis']);
        $communicator->setFio($item->getPatient()->getFio());
        $communicator->setAnamnesis($visit['anamnesis']);
        $communicator->setTreatment($visit['treatment']);
        $communicator->setRecommendation($visit['recommendation']);

        $om = $this->getObjectManager();
        $om->persist($communicator);
        $om->flush();
    }
}