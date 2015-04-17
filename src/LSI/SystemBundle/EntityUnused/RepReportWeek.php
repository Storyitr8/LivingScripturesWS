<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RepReportWeek
 *
 * @ORM\Table(name="rep_report_week", uniqueConstraints={@ORM\UniqueConstraint(name="uidx_repreportweek_summersalesweekiduserid", columns={"summer_sales_week_id", "userid"})}, indexes={@ORM\Index(name="FK__rep_repor__useri__50E5F592", columns={"userid"}), @ORM\Index(name="FK__rep_repor__appro__51DA19CB", columns={"approved_by_userid"}), @ORM\Index(name="fk_reportweek_stateprov", columns={"state_prov"}), @ORM\Index(name="IDX_C69D05B097E175E", columns={"summer_sales_week_id"})})
 * @ORM\Entity
 */
class RepReportWeek
{
    /**
     * @var string
     *
     * @ORM\Column(name="ward", type="string", length=500, nullable=true)
     */
    private $ward;

    /**
     * @var string
     *
     * @ORM\Column(name="stake", type="string", length=500, nullable=true)
     */
    private $stake;

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
     * @ORM\Column(name="rep_report_week_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $repReportWeekId;

    /**
     * @var \LSI\SystemBundle\Entity\StateProv
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\StateProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_prov", referencedColumnName="state_prov")
     * })
     */
    private $stateProv;

    /**
     * @var \LSI\SystemBundle\Entity\SummerSalesWeek
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\SummerSalesWeek")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="summer_sales_week_id", referencedColumnName="summer_sales_week_id")
     * })
     */
    private $summerSalesWeek;

    /**
     * @var \LSI\SystemBundle\Entity\UserMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="approved_by_userid", referencedColumnName="userid")
     * })
     */
    private $approvedByUserid;

    /**
     * @var \LSI\SystemBundle\Entity\UserMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     * })
     */
    private $userid;



    /**
     * Set ward
     *
     * @param string $ward
     * @return RepReportWeek
     */
    public function setWard($ward)
    {
        $this->ward = $ward;

        return $this;
    }

    /**
     * Get ward
     *
     * @return string 
     */
    public function getWard()
    {
        return $this->ward;
    }

    /**
     * Set stake
     *
     * @param string $stake
     * @return RepReportWeek
     */
    public function setStake($stake)
    {
        $this->stake = $stake;

        return $this;
    }

    /**
     * Get stake
     *
     * @return string 
     */
    public function getStake()
    {
        return $this->stake;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return RepReportWeek
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
     * @return RepReportWeek
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
     * @return RepReportWeek
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
     * @return RepReportWeek
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
     * Get repReportWeekId
     *
     * @return integer 
     */
    public function getRepReportWeekId()
    {
        return $this->repReportWeekId;
    }

    /**
     * Set stateProv
     *
     * @param \LSI\SystemBundle\Entity\StateProv $stateProv
     * @return RepReportWeek
     */
    public function setStateProv(\LSI\SystemBundle\Entity\StateProv $stateProv = null)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Get stateProv
     *
     * @return \LSI\SystemBundle\Entity\StateProv 
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Set summerSalesWeek
     *
     * @param \LSI\SystemBundle\Entity\SummerSalesWeek $summerSalesWeek
     * @return RepReportWeek
     */
    public function setSummerSalesWeek(\LSI\SystemBundle\Entity\SummerSalesWeek $summerSalesWeek = null)
    {
        $this->summerSalesWeek = $summerSalesWeek;

        return $this;
    }

    /**
     * Get summerSalesWeek
     *
     * @return \LSI\SystemBundle\Entity\SummerSalesWeek 
     */
    public function getSummerSalesWeek()
    {
        return $this->summerSalesWeek;
    }

    /**
     * Set approvedByUserid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $approvedByUserid
     * @return RepReportWeek
     */
    public function setApprovedByUserid(\LSI\SystemBundle\Entity\UserMain $approvedByUserid = null)
    {
        $this->approvedByUserid = $approvedByUserid;

        return $this;
    }

    /**
     * Get approvedByUserid
     *
     * @return \LSI\SystemBundle\Entity\UserMain 
     */
    public function getApprovedByUserid()
    {
        return $this->approvedByUserid;
    }

    /**
     * Set userid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $userid
     * @return RepReportWeek
     */
    public function setUserid(\LSI\SystemBundle\Entity\UserMain $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \LSI\SystemBundle\Entity\UserMain 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
