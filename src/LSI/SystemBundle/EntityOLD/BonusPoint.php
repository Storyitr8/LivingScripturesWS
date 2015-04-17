<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * BonusPoint
 *
 ** @ORM\Table(name="bonus_point")
 ** @ORM\Entity
 */
class BonusPoint
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="bonus_point_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bonusPointId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="bonus_id", type="integer", nullable=false)
     */
    private $bonusId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="points", type="smallint", nullable=false)
     */
    private $points;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="start_date", type="date", nullable=false)
     */
    private $startDate;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="allow_credit_card_bonus", type="boolean", nullable=false)
     */
    private $allowCreditCardBonus;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="sort_order", type="smallint", nullable=false)
     */
    private $sortOrder;

    /**
     *** @var string
     *
     ** @ORM\Column(name="active_status", type="string", length=1, nullable=false)
     */
    private $activeStatus;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="create_userid", type="integer", nullable=false)
     */
    private $createUserid;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="update_date", type="date", nullable=false)
     */
    private $updateDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="update_userid", type="integer", nullable=false)
     */
    private $updateUserid;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="min_dvd_purchase", type="integer", nullable=true)
     */
    private $minDvdPurchase;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="min_new_purchase", type="integer", nullable=true)
     */
    private $minNewPurchase;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="min_upgrade_purchase", type="integer", nullable=true)
     */
    private $minUpgradePurchase;

    /**
     *** @var \ShipType
     *
     ** @ORM\ManyToOne(targetEntity="ShipType")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="ship_type", referencedColumnName="ship_type")
     * })
     */
    private $shipType;

    /**
     *** @var \SalesProgramType
     *
     ** @ORM\ManyToOne(targetEntity="SalesProgramType")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="sales_program_type", referencedColumnName="sales_program_type")
     * })
     */
    private $salesProgramType;


    /**
     * Get bonusPointId
     *
     ** @return integer
     */
    public function getBonusPointId()
    {
        return $this->bonusPointId;
    }

    /**
     * Set bonusId
     *
     ** @param integer $bonusId
     ** @return BonusPoint
     */
    public function setBonusId($bonusId)
    {
        $this->bonusId = $bonusId;

        return $this;
    }

    /**
     * Get bonusId
     *
     ** @return integer
     */
    public function getBonusId()
    {
        return $this->bonusId;
    }

    /**
     * Set points
     *
     ** @param integer $points
     ** @return BonusPoint
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     ** @return integer
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set startDate
     *
     ** @param \DateTime $startDate
     ** @return BonusPoint
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     ** @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     ** @param \DateTime $endDate
     ** @return BonusPoint
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     ** @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set allowCreditCardBonus
     *
     ** @param boolean $allowCreditCardBonus
     ** @return BonusPoint
     */
    public function setAllowCreditCardBonus($allowCreditCardBonus)
    {
        $this->allowCreditCardBonus = $allowCreditCardBonus;

        return $this;
    }

    /**
     * Get allowCreditCardBonus
     *
     ** @return boolean
     */
    public function getAllowCreditCardBonus()
    {
        return $this->allowCreditCardBonus;
    }

    /**
     * Set sortOrder
     *
     ** @param integer $sortOrder
     ** @return BonusPoint
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     ** @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return BonusPoint
     */
    public function setActiveStatus($activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }

    /**
     * Get activeStatus
     *
     ** @return string
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return BonusPoint
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
     ** @return BonusPoint
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
     ** @return BonusPoint
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
     ** @return BonusPoint
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
     * Set minDvdPurchase
     *
     ** @param integer $minDvdPurchase
     ** @return BonusPoint
     */
    public function setMinDvdPurchase($minDvdPurchase)
    {
        $this->minDvdPurchase = $minDvdPurchase;

        return $this;
    }

    /**
     * Get minDvdPurchase
     *
     ** @return integer
     */
    public function getMinDvdPurchase()
    {
        return $this->minDvdPurchase;
    }

    /**
     * Set minNewPurchase
     *
     ** @param integer $minNewPurchase
     ** @return BonusPoint
     */
    public function setMinNewPurchase($minNewPurchase)
    {
        $this->minNewPurchase = $minNewPurchase;

        return $this;
    }

    /**
     * Get minNewPurchase
     *
     ** @return integer
     */
    public function getMinNewPurchase()
    {
        return $this->minNewPurchase;
    }

    /**
     * Set minUpgradePurchase
     *
     ** @param integer $minUpgradePurchase
     ** @return BonusPoint
     */
    public function setMinUpgradePurchase($minUpgradePurchase)
    {
        $this->minUpgradePurchase = $minUpgradePurchase;

        return $this;
    }

    /**
     * Get minUpgradePurchase
     *
     ** @return integer
     */
    public function getMinUpgradePurchase()
    {
        return $this->minUpgradePurchase;
    }

    /**
     * Set shipType
     *
     ** @param \ShipType $shipType
     ** @return BonusPoint
     */
    public function setShipType(\LSI\SystemBundle\Entity\ShipType $shipType = null)
    {
        $this->shipType = $shipType;

        return $this;
    }

    /**
     * Get shipType
     *
     ** @return \ShipType
     */
    public function getShipType()
    {
        return $this->shipType;
    }

    /**
     * Set salesProgramType
     *
     ** @param \SalesProgramType $salesProgramType
     ** @return BonusPoint
     */
    public function setSalesProgramType(\LSI\SystemBundle\Entity\SalesProgramType $salesProgramType = null)
    {
        $this->salesProgramType = $salesProgramType;

        return $this;
    }

    /**
     * Get salesProgramType
     *
     ** @return \SalesProgramType
     */
    public function getSalesProgramType()
    {
        return $this->salesProgramType;
    }
}
