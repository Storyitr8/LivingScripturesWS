<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepDailyReport
 *
 * @ORM\Table(name="rep_daily_report", uniqueConstraints={@ORM\UniqueConstraint(name="uidx_repdailyreport_weekiddayofweek", columns={"rep_report_week_id", "day_of_week"})}, indexes={@ORM\Index(name="IDX_3F95F10150D6205A", columns={"rep_report_week_id"})})
 * @ORM\Entity
 */
class RepDailyReport
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="day_of_week", type="boolean", nullable=false)
     */
    private $dayOfWeek;

    /**
     * @var integer
     *
     * @ORM\Column(name="doors_knocked", type="integer", nullable=false)
     */
    private $doorsKnocked;

    /**
     * @var integer
     *
     * @ORM\Column(name="contacts_made", type="integer", nullable=false)
     */
    private $contactsMade;

    /**
     * @var integer
     *
     * @ORM\Column(name="demos_given", type="integer", nullable=false)
     */
    private $demosGiven;

    /**
     * @var string
     *
     * @ORM\Column(name="sets_sold", type="decimal", precision=7, scale=1, nullable=true)
     */
    private $setsSold;

    /**
     * @var integer
     *
     * @ORM\Column(name="referrals_received", type="integer", nullable=true)
     */
    private $referralsReceived;

    /**
     * @var integer
     *
     * @ORM\Column(name="customers", type="integer", nullable=true)
     */
    private $customers;

    /**
     * @var string
     *
     * @ORM\Column(name="hours_worked", type="decimal", precision=7, scale=1, nullable=false)
     */
    private $hoursWorked;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_userid", type="integer", nullable=false)
     */
    private $createUserid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="date", nullable=false)
     */
    private $updateDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_userid", type="integer", nullable=false)
     */
    private $updateUserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="rep_daily_report_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $repDailyReportId;

    /**
     * @var \LSI\SystemBundle\Entity\RepReportWeek
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\RepReportWeek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rep_report_week_id", referencedColumnName="rep_report_week_id")
     * })
     */
    private $repReportWeek;



    /**
     * Set dayOfWeek
     *
     * @param boolean $dayOfWeek
     * @return RepDailyReport
     */
    public function setDayOfWeek($dayOfWeek)
    {
        $this->dayOfWeek = $dayOfWeek;

        return $this;
    }

    /**
     * Get dayOfWeek
     *
     * @return boolean 
     */
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * Set doorsKnocked
     *
     * @param integer $doorsKnocked
     * @return RepDailyReport
     */
    public function setDoorsKnocked($doorsKnocked)
    {
        $this->doorsKnocked = $doorsKnocked;

        return $this;
    }

    /**
     * Get doorsKnocked
     *
     * @return integer 
     */
    public function getDoorsKnocked()
    {
        return $this->doorsKnocked;
    }

    /**
     * Set contactsMade
     *
     * @param integer $contactsMade
     * @return RepDailyReport
     */
    public function setContactsMade($contactsMade)
    {
        $this->contactsMade = $contactsMade;

        return $this;
    }

    /**
     * Get contactsMade
     *
     * @return integer 
     */
    public function getContactsMade()
    {
        return $this->contactsMade;
    }

    /**
     * Set demosGiven
     *
     * @param integer $demosGiven
     * @return RepDailyReport
     */
    public function setDemosGiven($demosGiven)
    {
        $this->demosGiven = $demosGiven;

        return $this;
    }

    /**
     * Get demosGiven
     *
     * @return integer 
     */
    public function getDemosGiven()
    {
        return $this->demosGiven;
    }

    /**
     * Set setsSold
     *
     * @param string $setsSold
     * @return RepDailyReport
     */
    public function setSetsSold($setsSold)
    {
        $this->setsSold = $setsSold;

        return $this;
    }

    /**
     * Get setsSold
     *
     * @return string 
     */
    public function getSetsSold()
    {
        return $this->setsSold;
    }

    /**
     * Set referralsReceived
     *
     * @param integer $referralsReceived
     * @return RepDailyReport
     */
    public function setReferralsReceived($referralsReceived)
    {
        $this->referralsReceived = $referralsReceived;

        return $this;
    }

    /**
     * Get referralsReceived
     *
     * @return integer 
     */
    public function getReferralsReceived()
    {
        return $this->referralsReceived;
    }

    /**
     * Set customers
     *
     * @param integer $customers
     * @return RepDailyReport
     */
    public function setCustomers($customers)
    {
        $this->customers = $customers;

        return $this;
    }

    /**
     * Get customers
     *
     * @return integer 
     */
    public function getCustomers()
    {
        return $this->customers;
    }

    /**
     * Set hoursWorked
     *
     * @param string $hoursWorked
     * @return RepDailyReport
     */
    public function setHoursWorked($hoursWorked)
    {
        $this->hoursWorked = $hoursWorked;

        return $this;
    }

    /**
     * Get hoursWorked
     *
     * @return string 
     */
    public function getHoursWorked()
    {
        return $this->hoursWorked;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return RepDailyReport
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set createUserid
     *
     * @param integer $createUserid
     * @return RepDailyReport
     */
    public function setCreateUserid($createUserid)
    {
        $this->createUserid = $createUserid;

        return $this;
    }

    /**
     * Get createUserid
     *
     * @return integer 
     */
    public function getCreateUserid()
    {
        return $this->createUserid;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return RepDailyReport
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateUserid
     *
     * @param integer $updateUserid
     * @return RepDailyReport
     */
    public function setUpdateUserid($updateUserid)
    {
        $this->updateUserid = $updateUserid;

        return $this;
    }

    /**
     * Get updateUserid
     *
     * @return integer 
     */
    public function getUpdateUserid()
    {
        return $this->updateUserid;
    }

    /**
     * Get repDailyReportId
     *
     * @return integer 
     */
    public function getRepDailyReportId()
    {
        return $this->repDailyReportId;
    }

    /**
     * Set repReportWeek
     *
     * @param \LSI\SystemBundle\Entity\RepReportWeek $repReportWeek
     * @return RepDailyReport
     */
    public function setRepReportWeek(\LSI\SystemBundle\Entity\RepReportWeek $repReportWeek = null)
    {
        $this->repReportWeek = $repReportWeek;

        return $this;
    }

    /**
     * Get repReportWeek
     *
     * @return \LSI\SystemBundle\Entity\RepReportWeek 
     */
    public function getRepReportWeek()
    {
        return $this->repReportWeek;
    }
}
