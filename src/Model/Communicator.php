<?php
/**
 * @package Communicator.php
 * @author Vlad Kozak <vk@agere.com.ua>
 * @datetime: 21.10.2016 15:33
 */

namespace Agere\Communicator\Model;

use Doctrine\ORM\Mapping as ORM;
use Agere\Core\Model\DomainAwareTrait;

/**
 * @ORM\Entity(repositoryClass="Agere\Communicator\Model\Repository\CommunicatorRepository")
 * @ORM\Table(name="communicator")
 */
class Communicator
{
    use DomainAwareTrait;

    /**
     * @var int
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer", options={"unsigned":true})
     */
    private $id;

    /**
     * @var \DateTime
     * @ORM\Column(name="start_date", type="datetime", nullable=false)
     */
    private $startedAt;

    /**
     * @var \DateTime
     * @ORM\Column(name="end_date", type="datetime", nullable=false)
     */
    private $endedAt;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $description;

    /**
     * @var string
     * @ORM\Column(type="string", nullable=true, length=255)
     */
    private $subject;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Communicator
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $startedAt
     * @return Communicator
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * @param \DateTime $endedAt
     * @return Communicator
     */
    public function setEndedAt($endedAt)
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Communicator
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     * @return Communicator
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;

        return $this;
    }


}