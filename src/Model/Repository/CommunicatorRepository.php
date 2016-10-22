<?php
/**
 * @package CommunicatorRepository.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 21.10.2016 15:38
 */
namespace Agere\Communicator\Model\Repository;

class CommunicatorRepository extends \Doctrine\ORM\EntityRepository
{
    protected $_alias = 'communicator';
}