<?php
namespace LSI\SalesRabbitBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SalesRabbitOrder
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="json_array")
     */
    protected $data;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $time_received;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $processed;

    /**
     * @ORM\Column(type="integer")
     */
    protected $process_attempts;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $last_error;

    public function __construct()
    {
        $this->time_received = new \DateTime();
        $this->processed = false;
        $this->process_attempts = 0;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
        return $this;
    }

    public function getTimeReceived()
    {
        return $this->time_received;
    }

    public function setTimeReceived($time_received)
    {
        $this->time_received = $time_received;
        return $this;
    }

    public function getProcessed()
    {
        return $this->processed;
    }

    public function setProcessed($processed)
    {
        $this->processed = $processed;
        return $this;
    }

    public function getProcessAttempts()
    {
        return $this->process_attempts;
    }

    public function setProcessAttempts($process_attempts)
    {
        $this->process_attempts = $process_attempts;
        return $this;
    }

    public function getLastError()
    {
        return $this->last_error;
    }

    public function setLastError($last_error)
    {
        $this->last_error = $last_error;
        return $this;
    }
}