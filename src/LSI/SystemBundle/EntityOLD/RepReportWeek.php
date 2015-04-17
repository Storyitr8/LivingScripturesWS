<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepReportWeek
 *
 ** @ORM\Table(name="rep_report_week")
 ** @ORM\Entity
 */
class RepReportWeek
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="rep_report_week_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $repReportWeekId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="ward", type="string", length=500, nullable=true)
     */
    private $ward;

    /**
     *** @var string
     *
     ** @ORM\Column(name="stake", type="string", length=500, nullable=true)
     */
    private $stake;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="create_date", type="date", nullable=true)
     */
    private $createDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="create_userid", type="integer", nullable=true)
     */
    private $createUserid;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="update_date", type="date", nullable=true)
     */
    private $updateDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="update_userid", type="integer", nullable=true)
     */
    private $updateUserid;

    /**
     *** @var \UserMain
     *
     ** @ORM\ManyToOne(targetEntity="UserMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="userid", referencedColumnName="userid", nullable=false)
     * })
     */
    private $userid;

    /**
     *** @var \UserMain
     *
     ** @ORM\ManyToOne(targetEntity="UserMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="approved_by_userid", referencedColumnName="userid")
     * })
     */
    private $approvedByUserid;

    /**
     *** @var \SummerSalesWeek
     *
     ** @ORM\ManyToOne(targetEntity="SummerSalesWeek")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="summer_sales_week_id", referencedColumnName="summer_sales_week_id")
     * })
     */
    private $summerSalesWeek;

    /**
     *** @var \StateProv
     *
     ** @ORM\ManyToOne(targetEntity="StateProv")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="state_prov", referencedColumnName="state_prov")
     * })
     */
    private $stateProv;

    /**
     *** @var \RepReportWeek
     *
     ** @ORM\OneToMany(targetEntity="RepDailyReport", mappedBy="repReportWeek")
     *  @ORM\OrderBy({"dayOfWeek"="ASC"})
     */
    private $repDailyReports;

    public function __construct()
    {
        $this->repDailyReports = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get repReportWeekId
     *
     ** @return integer
     */
    public function getRepReportWeekId()
    {
        return $this->repReportWeekId;
    }

    /**
     * Set ward
     *
     ** @param string $ward
     ** @return RepReportWeek
     */
    public function setWard($ward)
    {
        $this->ward = $ward;

        return $this;
    }

    /**
     * Get ward
     *
     ** @return string
     */
    public function getWard()
    {
        return $this->ward;
    }

    /**
     * Set stake
     *
     ** @param string $stake
     ** @return RepReportWeek
     */
    public function setStake($stake)
    {
        $this->stake = $stake;

        return $this;
    }

    /**
     * Get stake
     *
     ** @return string
     */
    public function getStake()
    {
        return $this->stake;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return RepReportWeek
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     ** @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set createUserid
     *
     ** @param integer $createUserid
     ** @return RepReportWeek
     */
    public function setCreateUserid($createUserid)
    {
        $this->createUserid = $createUserid;

        return $this;
    }

    /**
     * Get createUserid
     *
     ** @return integer
     */
    public function getCreateUserid()
    {
        return $this->createUserid;
    }

    /**
     * Set updateDate
     *
     ** @param \DateTime $updateDate
     ** @return RepReportWeek
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     ** @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateUserid
     *
     ** @param integer $updateUserid
     ** @return RepReportWeek
     */
    public function setUpdateUserid($updateUserid)
    {
        $this->updateUserid = $updateUserid;

        return $this;
    }

    /**
     * Get updateUserid
     *
     ** @return integer
     */
    public function getUpdateUserid()
    {
        return $this->updateUserid;
    }

    /**
     * Set userid
     *
     ** @param \UserMain $userid
     ** @return RepReportWeek
     */
    public function setUserid(\LSI\SystemBundle\Entity\UserMain $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     ** @return \UserMain
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set approvedByUserid
     *
     ** @param \UserMain $approvedByUserid
     ** @return RepReportWeek
     */
    public function setApprovedByUserid(\LSI\SystemBundle\Entity\UserMain $approvedByUserid = null)
    {
        $this->approvedByUserid = $approvedByUserid;

        return $this;
    }

    /**
     * Get approvedByUserid
     *
     ** @return \UserMain
     */
    public function getApprovedByUserid()
    {
        return $this->approvedByUserid;
    }

    /**
     * Set summerSalesWeek
     *
     ** @param \SummerSalesWeek $summerSalesWeek
     ** @return RepReportWeek
     */
    public function setSummerSalesWeek(\LSI\SystemBundle\Entity\SummerSalesWeek $summerSalesWeek = null)
    {
        $this->summerSalesWeek = $summerSalesWeek;

        return $this;
    }

    /**
     * Get summerSalesWeek
     *
     ** @return \SummerSalesWeek
     */
    public function getSummerSalesWeek()
    {
        return $this->summerSalesWeek;
    }

    /**
     * Set stateProv
     *
     ** @param \StateProv $stateProv
     ** @return RepReportWeek
     */
    public function setStateProv(\LSI\SystemBundle\Entity\StateProv $stateProv = null)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Get stateProv
     *
     ** @return \StateProv
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    public function getRepDailyReports()
    {
        return $this->repDailyReports;
    }

    public function addRepDailyReports($repDailyReports)
    {
        $this->repDailyReports[] = $repDailyReports;
        return $this;
    }
}
