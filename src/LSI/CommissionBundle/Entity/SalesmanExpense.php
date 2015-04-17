<?php
namespace LSI\CommissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @JMS\ExclusionPolicy("all")
 */
class SalesmanExpense
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\UserBundle\Entity\User", inversedBy="expenses")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @JMS\Expose
     */
    protected $category;

    /**
     * @ORM\Column(type="integer")
     * @JMS\Expose
     */
    protected $week_number;

    /**
     * @ORM\Column(type="date")
     * @JMS\Expose
     */
    protected $created_at;

    /**
     * @ORM\Column(type="text")
     * @JMS\Expose
     */
    protected $description;

    /**
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

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
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