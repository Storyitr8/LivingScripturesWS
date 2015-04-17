<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderMainBackup
 *
 ** @ORM\Table(name="order_main_backup")
 ** @ORM\Entity
 */
class OrderMainBackup
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="order_main_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderMainId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="customer_main_id", type="integer", nullable=false)
     */
    private $customerMainId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="order_status_id", type="smallint", nullable=false)
     */
    private $orderStatusId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="sold_location", type="string", length=2, nullable=false)
     */
    private $soldLocation;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="order_date", type="date", nullable=false)
     */
    private $orderDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="parcels_ship", type="smallint", nullable=false)
     */
    private $parcelsShip;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="parcels_ship_schedule", type="smallint", nullable=false)
     */
    private $parcelsShipSchedule;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="signed_dated", type="boolean", nullable=false)
     */
    private $signedDated;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="totals_same", type="boolean", nullable=false)
     */
    private $totalsSame;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="modified_second_page", type="boolean", nullable=true)
     */
    private $modifiedSecondPage;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="post_dated_check", type="boolean", nullable=false)
     */
    private $postDatedCheck;

    /**
     *** @var string
     *
     ** @ORM\Column(name="special_handling_instructions", type="string", length=280, nullable=true)
     */
    private $specialHandlingInstructions;

    /**
     *** @var float
     *
     ** @ORM\Column(name="total_purchase_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $totalPurchasePrice;

    /**
     *** @var float
     *
     ** @ORM\Column(name="down_payment", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $downPayment;

    /**
     *** @var float
     *
     ** @ORM\Column(name="amount_remaining", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $amountRemaining;

    /**
     *** @var string
     *
     ** @ORM\Column(name="payment_method", type="string", length=2, nullable=false)
     */
    private $paymentMethod;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="cc_charge_down_payment", type="boolean", nullable=false)
     */
    private $ccChargeDownPayment;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="cc_charge_future_payment", type="boolean", nullable=false)
     */
    private $ccChargeFuturePayment;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_initial", type="smallint", nullable=true)
     */
    private $paidShippingTotalDvdNewInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_handling_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdNewHandlingInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_tax_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdNewTaxInitial;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_scheduled", type="smallint", nullable=true)
     */
    private $paidShippingTotalDvdNewScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdNewHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_new_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdNewTaxScheduled;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="free_shipping_total_dvd_new", type="smallint", nullable=true)
     */
    private $freeShippingTotalDvdNew;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_dvd_new_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalDvdNewHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_dvd_new_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalDvdNewTaxScheduled;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_initial", type="smallint", nullable=true)
     */
    private $paidShippingTotalDvdUpgradeInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_handling_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdUpgradeHandlingInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_tax_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdUpgradeTaxInitial;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_scheduled", type="smallint", nullable=true)
     */
    private $paidShippingTotalDvdUpgradeScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdUpgradeHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_dvd_upgrade_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalDvdUpgradeTaxScheduled;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="free_shipping_total_dvd_upgrade", type="smallint", nullable=true)
     */
    private $freeShippingTotalDvdUpgrade;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_dvd_upgrade_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalDvdUpgradeHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_dvd_upgrade_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalDvdUpgradeTaxScheduled;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_initial", type="smallint", nullable=true)
     */
    private $paidShippingTotalCdNewInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_handling_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalCdNewHandlingInitial;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_tax_initial", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalCdNewTaxInitial;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_scheduled", type="smallint", nullable=true)
     */
    private $paidShippingTotalCdNewScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalCdNewHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="paid_shipping_total_cd_new_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $paidShippingTotalCdNewTaxScheduled;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="free_shipping_total_cd_new", type="smallint", nullable=true)
     */
    private $freeShippingTotalCdNew;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_cd_new_handling_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalCdNewHandlingScheduled;

    /**
     *** @var float
     *
     ** @ORM\Column(name="free_shipping_total_cd_new_tax_scheduled", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $freeShippingTotalCdNewTaxScheduled;

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
     ** @ORM\Column(name="cc_bonus_id", type="integer", nullable=true)
     */
    private $ccBonusId;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="check_postdate", type="date", nullable=true)
     */
    private $checkPostdate;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="cancellation_postdate", type="date", nullable=true)
     */
    private $cancellationPostdate;


    /**
     * Get orderMainId
     *
     ** @return integer
     */
    public function getOrderMainId()
    {
        return $this->orderMainId;
    }

    /**
     * Set customerMainId
     *
     ** @param integer $customerMainId
     ** @return OrderMainBackup
     */
    public function setCustomerMainId($customerMainId)
    {
        $this->customerMainId = $customerMainId;

        return $this;
    }

    /**
     * Get customerMainId
     *
     ** @return integer
     */
    public function getCustomerMainId()
    {
        return $this->customerMainId;
    }

    /**
     * Set userid
     *
     ** @param integer $userid
     ** @return OrderMainBackup
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
     * Set orderStatusId
     *
     ** @param integer $orderStatusId
     ** @return OrderMainBackup
     */
    public function setOrderStatusId($orderStatusId)
    {
        $this->orderStatusId = $orderStatusId;

        return $this;
    }

    /**
     * Get orderStatusId
     *
     ** @return integer
     */
    public function getOrderStatusId()
    {
        return $this->orderStatusId;
    }

    /**
     * Set soldLocation
     *
     ** @param string $soldLocation
     ** @return OrderMainBackup
     */
    public function setSoldLocation($soldLocation)
    {
        $this->soldLocation = $soldLocation;

        return $this;
    }

    /**
     * Get soldLocation
     *
     ** @return string
     */
    public function getSoldLocation()
    {
        return $this->soldLocation;
    }

    /**
     * Set orderDate
     *
     ** @param \DateTime $orderDate
     ** @return OrderMainBackup
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;

        return $this;
    }

    /**
     * Get orderDate
     *
     ** @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Set parcelsShip
     *
     ** @param integer $parcelsShip
     ** @return OrderMainBackup
     */
    public function setParcelsShip($parcelsShip)
    {
        $this->parcelsShip = $parcelsShip;

        return $this;
    }

    /**
     * Get parcelsShip
     *
     ** @return integer
     */
    public function getParcelsShip()
    {
        return $this->parcelsShip;
    }

    /**
     * Set parcelsShipSchedule
     *
     ** @param integer $parcelsShipSchedule
     ** @return OrderMainBackup
     */
    public function setParcelsShipSchedule($parcelsShipSchedule)
    {
        $this->parcelsShipSchedule = $parcelsShipSchedule;

        return $this;
    }

    /**
     * Get parcelsShipSchedule
     *
     ** @return integer
     */
    public function getParcelsShipSchedule()
    {
        return $this->parcelsShipSchedule;
    }

    /**
     * Set signedDated
     *
     ** @param boolean $signedDated
     ** @return OrderMainBackup
     */
    public function setSignedDated($signedDated)
    {
        $this->signedDated = $signedDated;

        return $this;
    }

    /**
     * Get signedDated
     *
     ** @return boolean
     */
    public function getSignedDated()
    {
        return $this->signedDated;
    }

    /**
     * Set totalsSame
     *
     ** @param boolean $totalsSame
     ** @return OrderMainBackup
     */
    public function setTotalsSame($totalsSame)
    {
        $this->totalsSame = $totalsSame;

        return $this;
    }

    /**
     * Get totalsSame
     *
     ** @return boolean
     */
    public function getTotalsSame()
    {
        return $this->totalsSame;
    }

    /**
     * Set modifiedSecondPage
     *
     ** @param boolean $modifiedSecondPage
     ** @return OrderMainBackup
     */
    public function setModifiedSecondPage($modifiedSecondPage)
    {
        $this->modifiedSecondPage = $modifiedSecondPage;

        return $this;
    }

    /**
     * Get modifiedSecondPage
     *
     ** @return boolean
     */
    public function getModifiedSecondPage()
    {
        return $this->modifiedSecondPage;
    }

    /**
     * Set postDatedCheck
     *
     ** @param boolean $postDatedCheck
     ** @return OrderMainBackup
     */
    public function setPostDatedCheck($postDatedCheck)
    {
        $this->postDatedCheck = $postDatedCheck;

        return $this;
    }

    /**
     * Get postDatedCheck
     *
     ** @return boolean
     */
    public function getPostDatedCheck()
    {
        return $this->postDatedCheck;
    }

    /**
     * Set specialHandlingInstructions
     *
     ** @param string $specialHandlingInstructions
     ** @return OrderMainBackup
     */
    public function setSpecialHandlingInstructions($specialHandlingInstructions)
    {
        $this->specialHandlingInstructions = $specialHandlingInstructions;

        return $this;
    }

    /**
     * Get specialHandlingInstructions
     *
     ** @return string
     */
    public function getSpecialHandlingInstructions()
    {
        return $this->specialHandlingInstructions;
    }

    /**
     * Set totalPurchasePrice
     *
     ** @param float $totalPurchasePrice
     ** @return OrderMainBackup
     */
    public function setTotalPurchasePrice($totalPurchasePrice)
    {
        $this->totalPurchasePrice = $totalPurchasePrice;

        return $this;
    }

    /**
     * Get totalPurchasePrice
     *
     ** @return float
     */
    public function getTotalPurchasePrice()
    {
        return $this->totalPurchasePrice;
    }

    /**
     * Set downPayment
     *
     ** @param float $downPayment
     ** @return OrderMainBackup
     */
    public function setDownPayment($downPayment)
    {
        $this->downPayment = $downPayment;

        return $this;
    }

    /**
     * Get downPayment
     *
     ** @return float
     */
    public function getDownPayment()
    {
        return $this->downPayment;
    }

    /**
     * Set amountRemaining
     *
     ** @param float $amountRemaining
     ** @return OrderMainBackup
     */
    public function setAmountRemaining($amountRemaining)
    {
        $this->amountRemaining = $amountRemaining;

        return $this;
    }

    /**
     * Get amountRemaining
     *
     ** @return float
     */
    public function getAmountRemaining()
    {
        return $this->amountRemaining;
    }

    /**
     * Set paymentMethod
     *
     ** @param string $paymentMethod
     ** @return OrderMainBackup
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    /**
     * Get paymentMethod
     *
     ** @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     * Set ccChargeDownPayment
     *
     ** @param boolean $ccChargeDownPayment
     ** @return OrderMainBackup
     */
    public function setCcChargeDownPayment($ccChargeDownPayment)
    {
        $this->ccChargeDownPayment = $ccChargeDownPayment;

        return $this;
    }

    /**
     * Get ccChargeDownPayment
     *
     ** @return boolean
     */
    public function getCcChargeDownPayment()
    {
        return $this->ccChargeDownPayment;
    }

    /**
     * Set ccChargeFuturePayment
     *
     ** @param boolean $ccChargeFuturePayment
     ** @return OrderMainBackup
     */
    public function setCcChargeFuturePayment($ccChargeFuturePayment)
    {
        $this->ccChargeFuturePayment = $ccChargeFuturePayment;

        return $this;
    }

    /**
     * Get ccChargeFuturePayment
     *
     ** @return boolean
     */
    public function getCcChargeFuturePayment()
    {
        return $this->ccChargeFuturePayment;
    }

    /**
     * Set paidShippingTotalDvdNewInitial
     *
     ** @param integer $paidShippingTotalDvdNewInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewInitial($paidShippingTotalDvdNewInitial)
    {
        $this->paidShippingTotalDvdNewInitial = $paidShippingTotalDvdNewInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewInitial
     *
     ** @return integer
     */
    public function getPaidShippingTotalDvdNewInitial()
    {
        return $this->paidShippingTotalDvdNewInitial;
    }

    /**
     * Set paidShippingTotalDvdNewHandlingInitial
     *
     ** @param float $paidShippingTotalDvdNewHandlingInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewHandlingInitial($paidShippingTotalDvdNewHandlingInitial)
    {
        $this->paidShippingTotalDvdNewHandlingInitial = $paidShippingTotalDvdNewHandlingInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewHandlingInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdNewHandlingInitial()
    {
        return $this->paidShippingTotalDvdNewHandlingInitial;
    }

    /**
     * Set paidShippingTotalDvdNewTaxInitial
     *
     ** @param float $paidShippingTotalDvdNewTaxInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewTaxInitial($paidShippingTotalDvdNewTaxInitial)
    {
        $this->paidShippingTotalDvdNewTaxInitial = $paidShippingTotalDvdNewTaxInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewTaxInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdNewTaxInitial()
    {
        return $this->paidShippingTotalDvdNewTaxInitial;
    }

    /**
     * Set paidShippingTotalDvdNewScheduled
     *
     ** @param integer $paidShippingTotalDvdNewScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewScheduled($paidShippingTotalDvdNewScheduled)
    {
        $this->paidShippingTotalDvdNewScheduled = $paidShippingTotalDvdNewScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewScheduled
     *
     ** @return integer
     */
    public function getPaidShippingTotalDvdNewScheduled()
    {
        return $this->paidShippingTotalDvdNewScheduled;
    }

    /**
     * Set paidShippingTotalDvdNewHandlingScheduled
     *
     ** @param float $paidShippingTotalDvdNewHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewHandlingScheduled($paidShippingTotalDvdNewHandlingScheduled)
    {
        $this->paidShippingTotalDvdNewHandlingScheduled = $paidShippingTotalDvdNewHandlingScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewHandlingScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdNewHandlingScheduled()
    {
        return $this->paidShippingTotalDvdNewHandlingScheduled;
    }

    /**
     * Set paidShippingTotalDvdNewTaxScheduled
     *
     ** @param float $paidShippingTotalDvdNewTaxScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdNewTaxScheduled($paidShippingTotalDvdNewTaxScheduled)
    {
        $this->paidShippingTotalDvdNewTaxScheduled = $paidShippingTotalDvdNewTaxScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdNewTaxScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdNewTaxScheduled()
    {
        return $this->paidShippingTotalDvdNewTaxScheduled;
    }

    /**
     * Set freeShippingTotalDvdNew
     *
     ** @param integer $freeShippingTotalDvdNew
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdNew($freeShippingTotalDvdNew)
    {
        $this->freeShippingTotalDvdNew = $freeShippingTotalDvdNew;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdNew
     *
     ** @return integer
     */
    public function getFreeShippingTotalDvdNew()
    {
        return $this->freeShippingTotalDvdNew;
    }

    /**
     * Set freeShippingTotalDvdNewHandlingScheduled
     *
     ** @param float $freeShippingTotalDvdNewHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdNewHandlingScheduled($freeShippingTotalDvdNewHandlingScheduled)
    {
        $this->freeShippingTotalDvdNewHandlingScheduled = $freeShippingTotalDvdNewHandlingScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdNewHandlingScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalDvdNewHandlingScheduled()
    {
        return $this->freeShippingTotalDvdNewHandlingScheduled;
    }

    /**
     * Set freeShippingTotalDvdNewTaxScheduled
     *
     ** @param float $freeShippingTotalDvdNewTaxScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdNewTaxScheduled($freeShippingTotalDvdNewTaxScheduled)
    {
        $this->freeShippingTotalDvdNewTaxScheduled = $freeShippingTotalDvdNewTaxScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdNewTaxScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalDvdNewTaxScheduled()
    {
        return $this->freeShippingTotalDvdNewTaxScheduled;
    }

    /**
     * Set paidShippingTotalDvdUpgradeInitial
     *
     ** @param integer $paidShippingTotalDvdUpgradeInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeInitial($paidShippingTotalDvdUpgradeInitial)
    {
        $this->paidShippingTotalDvdUpgradeInitial = $paidShippingTotalDvdUpgradeInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeInitial
     *
     ** @return integer
     */
    public function getPaidShippingTotalDvdUpgradeInitial()
    {
        return $this->paidShippingTotalDvdUpgradeInitial;
    }

    /**
     * Set paidShippingTotalDvdUpgradeHandlingInitial
     *
     ** @param float $paidShippingTotalDvdUpgradeHandlingInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeHandlingInitial($paidShippingTotalDvdUpgradeHandlingInitial)
    {
        $this->paidShippingTotalDvdUpgradeHandlingInitial = $paidShippingTotalDvdUpgradeHandlingInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeHandlingInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdUpgradeHandlingInitial()
    {
        return $this->paidShippingTotalDvdUpgradeHandlingInitial;
    }

    /**
     * Set paidShippingTotalDvdUpgradeTaxInitial
     *
     ** @param float $paidShippingTotalDvdUpgradeTaxInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeTaxInitial($paidShippingTotalDvdUpgradeTaxInitial)
    {
        $this->paidShippingTotalDvdUpgradeTaxInitial = $paidShippingTotalDvdUpgradeTaxInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeTaxInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdUpgradeTaxInitial()
    {
        return $this->paidShippingTotalDvdUpgradeTaxInitial;
    }

    /**
     * Set paidShippingTotalDvdUpgradeScheduled
     *
     ** @param integer $paidShippingTotalDvdUpgradeScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeScheduled($paidShippingTotalDvdUpgradeScheduled)
    {
        $this->paidShippingTotalDvdUpgradeScheduled = $paidShippingTotalDvdUpgradeScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeScheduled
     *
     ** @return integer
     */
    public function getPaidShippingTotalDvdUpgradeScheduled()
    {
        return $this->paidShippingTotalDvdUpgradeScheduled;
    }

    /**
     * Set paidShippingTotalDvdUpgradeHandlingScheduled
     *
     ** @param float $paidShippingTotalDvdUpgradeHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeHandlingScheduled($paidShippingTotalDvdUpgradeHandlingScheduled)
    {
        $this->paidShippingTotalDvdUpgradeHandlingScheduled = $paidShippingTotalDvdUpgradeHandlingScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeHandlingScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdUpgradeHandlingScheduled()
    {
        return $this->paidShippingTotalDvdUpgradeHandlingScheduled;
    }

    /**
     * Set paidShippingTotalDvdUpgradeTaxScheduled
     *
     ** @param float $paidShippingTotalDvdUpgradeTaxScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalDvdUpgradeTaxScheduled($paidShippingTotalDvdUpgradeTaxScheduled)
    {
        $this->paidShippingTotalDvdUpgradeTaxScheduled = $paidShippingTotalDvdUpgradeTaxScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalDvdUpgradeTaxScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalDvdUpgradeTaxScheduled()
    {
        return $this->paidShippingTotalDvdUpgradeTaxScheduled;
    }

    /**
     * Set freeShippingTotalDvdUpgrade
     *
     ** @param integer $freeShippingTotalDvdUpgrade
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdUpgrade($freeShippingTotalDvdUpgrade)
    {
        $this->freeShippingTotalDvdUpgrade = $freeShippingTotalDvdUpgrade;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdUpgrade
     *
     ** @return integer
     */
    public function getFreeShippingTotalDvdUpgrade()
    {
        return $this->freeShippingTotalDvdUpgrade;
    }

    /**
     * Set freeShippingTotalDvdUpgradeHandlingScheduled
     *
     ** @param float $freeShippingTotalDvdUpgradeHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdUpgradeHandlingScheduled($freeShippingTotalDvdUpgradeHandlingScheduled)
    {
        $this->freeShippingTotalDvdUpgradeHandlingScheduled = $freeShippingTotalDvdUpgradeHandlingScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdUpgradeHandlingScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalDvdUpgradeHandlingScheduled()
    {
        return $this->freeShippingTotalDvdUpgradeHandlingScheduled;
    }

    /**
     * Set freeShippingTotalDvdUpgradeTaxScheduled
     *
     ** @param float $freeShippingTotalDvdUpgradeTaxScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalDvdUpgradeTaxScheduled($freeShippingTotalDvdUpgradeTaxScheduled)
    {
        $this->freeShippingTotalDvdUpgradeTaxScheduled = $freeShippingTotalDvdUpgradeTaxScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalDvdUpgradeTaxScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalDvdUpgradeTaxScheduled()
    {
        return $this->freeShippingTotalDvdUpgradeTaxScheduled;
    }

    /**
     * Set paidShippingTotalCdNewInitial
     *
     ** @param integer $paidShippingTotalCdNewInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewInitial($paidShippingTotalCdNewInitial)
    {
        $this->paidShippingTotalCdNewInitial = $paidShippingTotalCdNewInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewInitial
     *
     ** @return integer
     */
    public function getPaidShippingTotalCdNewInitial()
    {
        return $this->paidShippingTotalCdNewInitial;
    }

    /**
     * Set paidShippingTotalCdNewHandlingInitial
     *
     ** @param float $paidShippingTotalCdNewHandlingInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewHandlingInitial($paidShippingTotalCdNewHandlingInitial)
    {
        $this->paidShippingTotalCdNewHandlingInitial = $paidShippingTotalCdNewHandlingInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewHandlingInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalCdNewHandlingInitial()
    {
        return $this->paidShippingTotalCdNewHandlingInitial;
    }

    /**
     * Set paidShippingTotalCdNewTaxInitial
     *
     ** @param float $paidShippingTotalCdNewTaxInitial
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewTaxInitial($paidShippingTotalCdNewTaxInitial)
    {
        $this->paidShippingTotalCdNewTaxInitial = $paidShippingTotalCdNewTaxInitial;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewTaxInitial
     *
     ** @return float
     */
    public function getPaidShippingTotalCdNewTaxInitial()
    {
        return $this->paidShippingTotalCdNewTaxInitial;
    }

    /**
     * Set paidShippingTotalCdNewScheduled
     *
     ** @param integer $paidShippingTotalCdNewScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewScheduled($paidShippingTotalCdNewScheduled)
    {
        $this->paidShippingTotalCdNewScheduled = $paidShippingTotalCdNewScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewScheduled
     *
     ** @return integer
     */
    public function getPaidShippingTotalCdNewScheduled()
    {
        return $this->paidShippingTotalCdNewScheduled;
    }

    /**
     * Set paidShippingTotalCdNewHandlingScheduled
     *
     ** @param float $paidShippingTotalCdNewHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewHandlingScheduled($paidShippingTotalCdNewHandlingScheduled)
    {
        $this->paidShippingTotalCdNewHandlingScheduled = $paidShippingTotalCdNewHandlingScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewHandlingScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalCdNewHandlingScheduled()
    {
        return $this->paidShippingTotalCdNewHandlingScheduled;
    }

    /**
     * Set paidShippingTotalCdNewTaxScheduled
     *
     ** @param float $paidShippingTotalCdNewTaxScheduled
     ** @return OrderMainBackup
     */
    public function setPaidShippingTotalCdNewTaxScheduled($paidShippingTotalCdNewTaxScheduled)
    {
        $this->paidShippingTotalCdNewTaxScheduled = $paidShippingTotalCdNewTaxScheduled;

        return $this;
    }

    /**
     * Get paidShippingTotalCdNewTaxScheduled
     *
     ** @return float
     */
    public function getPaidShippingTotalCdNewTaxScheduled()
    {
        return $this->paidShippingTotalCdNewTaxScheduled;
    }

    /**
     * Set freeShippingTotalCdNew
     *
     ** @param integer $freeShippingTotalCdNew
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalCdNew($freeShippingTotalCdNew)
    {
        $this->freeShippingTotalCdNew = $freeShippingTotalCdNew;

        return $this;
    }

    /**
     * Get freeShippingTotalCdNew
     *
     ** @return integer
     */
    public function getFreeShippingTotalCdNew()
    {
        return $this->freeShippingTotalCdNew;
    }

    /**
     * Set freeShippingTotalCdNewHandlingScheduled
     *
     ** @param float $freeShippingTotalCdNewHandlingScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalCdNewHandlingScheduled($freeShippingTotalCdNewHandlingScheduled)
    {
        $this->freeShippingTotalCdNewHandlingScheduled = $freeShippingTotalCdNewHandlingScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalCdNewHandlingScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalCdNewHandlingScheduled()
    {
        return $this->freeShippingTotalCdNewHandlingScheduled;
    }

    /**
     * Set freeShippingTotalCdNewTaxScheduled
     *
     ** @param float $freeShippingTotalCdNewTaxScheduled
     ** @return OrderMainBackup
     */
    public function setFreeShippingTotalCdNewTaxScheduled($freeShippingTotalCdNewTaxScheduled)
    {
        $this->freeShippingTotalCdNewTaxScheduled = $freeShippingTotalCdNewTaxScheduled;

        return $this;
    }

    /**
     * Get freeShippingTotalCdNewTaxScheduled
     *
     ** @return float
     */
    public function getFreeShippingTotalCdNewTaxScheduled()
    {
        return $this->freeShippingTotalCdNewTaxScheduled;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return OrderMainBackup
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
     ** @return OrderMainBackup
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
     ** @return OrderMainBackup
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
     ** @return OrderMainBackup
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
     * Set ccBonusId
     *
     ** @param integer $ccBonusId
     ** @return OrderMainBackup
     */
    public function setCcBonusId($ccBonusId)
    {
        $this->ccBonusId = $ccBonusId;

        return $this;
    }

    /**
     * Get ccBonusId
     *
     ** @return integer
     */
    public function getCcBonusId()
    {
        return $this->ccBonusId;
    }

    /**
     * Set checkPostdate
     *
     ** @param \DateTime $checkPostdate
     ** @return OrderMainBackup
     */
    public function setCheckPostdate($checkPostdate)
    {
        $this->checkPostdate = $checkPostdate;

        return $this;
    }

    /**
     * Get checkPostdate
     *
     ** @return \DateTime
     */
    public function getCheckPostdate()
    {
        return $this->checkPostdate;
    }

    /**
     * Set cancellationPostdate
     *
     ** @param \DateTime $cancellationPostdate
     ** @return OrderMainBackup
     */
    public function setCancellationPostdate($cancellationPostdate)
    {
        $this->cancellationPostdate = $cancellationPostdate;

        return $this;
    }

    /**
     * Get cancellationPostdate
     *
     ** @return \DateTime
     */
    public function getCancellationPostdate()
    {
        return $this->cancellationPostdate;
    }
}
