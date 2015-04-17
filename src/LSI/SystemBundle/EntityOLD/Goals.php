<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Goals
 *
 ** @ORM\Table(name="goals")
 ** @ORM\Entity
 */
class Goals
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="goalid", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $goalid;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="hours", type="integer", nullable=true)
     */
    private $hours;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="doors", type="integer", nullable=true)
     */
    private $doors;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="contacts", type="integer", nullable=true)
     */
    private $contacts;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="demos", type="integer", nullable=true)
     */
    private $demos;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="referrals", type="integer", nullable=true)
     */
    private $referrals;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="customers", type="integer", nullable=true)
     */
    private $customers;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="sets", type="integer", nullable=true)
     */
    private $sets;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;


    /**
     * Get goalid
     *
     ** @return integer
     */
    public function getGoalid()
    {
        return $this->goalid;
    }

    /**
     * Set userid
     *
     ** @param integer $userid
     ** @return Goals
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     ** @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set hours
     *
     ** @param integer $hours
     ** @return Goals
     */
    public function setHours($hours)
    {
        $this->hours = $hours;

        return $this;
    }

    /**
     * Get hours
     *
     ** @return integer
     */
    public function getHours()
    {
        return $this->hours;
    }

    /**
     * Set doors
     *
     ** @param integer $doors
     ** @return Goals
     */
    public function setDoors($doors)
    {
        $this->doors = $doors;

        return $this;
    }

    /**
     * Get doors
     *
     ** @return integer
     */
    public function getDoors()
    {
        return $this->doors;
    }

    /**
     * Set contacts
     *
     ** @param integer $contacts
     ** @return Goals
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     ** @return integer
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set demos
     *
     ** @param integer $demos
     ** @return Goals
     */
    public function setDemos($demos)
    {
        $this->demos = $demos;

        return $this;
    }

    /**
     * Get demos
     *
     ** @return integer
     */
    public function getDemos()
    {
        return $this->demos;
    }

    /**
     * Set referrals
     *
     ** @param integer $referrals
     ** @return Goals
     */
    public function setReferrals($referrals)
    {
        $this->referrals = $referrals;

        return $this;
    }

    /**
     * Get referrals
     *
     ** @return integer
     */
    public function getReferrals()
    {
        return $this->referrals;
    }

    /**
     * Set customers
     *
     ** @param integer $customers
     ** @return Goals
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * Get customers
     *
     ** @return integer
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * Set sets
     *
     ** @param integer $sets
     ** @return Goals
     */
    public function setSets($sets)
    {
        $this->sets = $sets;

        return $this;
    }

    /**
     * Get sets
     *
     ** @return integer
     */
    public function getSets()
    {
        return $this->sets;
    }

    /**
     * Set date
     *
     ** @param \DateTime $date
     ** @return Goals
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     ** @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
