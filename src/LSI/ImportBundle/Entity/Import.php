<?php

namespace LSI\ImportBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Import
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $filename;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $processed;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    protected $processed_at;

    public function __construct()
    {
        $this->processed = false;
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

    public function getFilename()
    {
        return $this->filename;
    }

    public function setFilename($filename)
    {
        $this->filename = $filename;
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

    public function getProcessedAt()
    {
        return $this->processed_at;
    }

    public function setProcessedAt($processed_at)
    {
        $this->processed_at = $processed_at;
        return $this;
    }
}