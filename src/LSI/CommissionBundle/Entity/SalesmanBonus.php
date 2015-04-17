<?php

namespace LSI\CommissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use LSI\UserBundle\Entity\User;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @JMS\ExclusionPolicy("all")
 */
class SalesmanBonus
{
    /**
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\UserBundle\Entity\User", inversedBy="bonuses")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @var string
     *
     * @ORM\Column(type="integer", length=2)
     * @JMS\Expose
     */
    protected $week_number;

    /**
     * @var \DateTime
     *
     * @ORM\Column(type="date")
     * @JMS\Expose
     */
    protected $created_at;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     * @JMS\Expose
     */
    protected $description;

    /**
     * @var string
     *
     * @ORM\Column(type="decimal", scale=4, precision=10)
     * @JMS\Expose
     */
    protected $amount;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getSlsmNo()
    {
        return $this->user;
    }

    public function setSlsmNo(User $user)
    {
        $this->user = $user;
        return $this;
    }

    public function getWeekNumber()
    {
        return $this->week_number;
    }

    public function setWeekNumber($week_number)
    {
        $this->week_number = $week_number;
        return $this;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setCreatedAt($created_at)
    {
        $this->created_at = $created_at;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
}
