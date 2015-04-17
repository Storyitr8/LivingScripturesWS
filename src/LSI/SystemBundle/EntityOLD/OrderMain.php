<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderMain
 *
 ** @ORM\Table(name="order_main")
 ** @ORM\Entity
 */
class OrderMain
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
     *** @var string
     *
     ** @ORM\Column(name="animated_bible", type="string", length=10, nullable=true)
     */
    private $animatedBible;

    /**
     *** @var string
     *
     ** @ORM\Column(name="not_lds", type="string", length=10, nullable=true)
     */
    private $notLds;

    /**
     *** @var string
     *
     ** @ORM\Column(name="confirmation_number", type="string", length=50, nullable=true)
     */
    private $confirmationNumber;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="expedite_option_id", type="integer", nullable=false)
     */
    private $expediteOptionId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="promo", type="string", length=25, nullable=true)
     */
    private $promo;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="verifier_slsm_no", type="integer", nullable=true)
     */
    private $verifierSlsmNo;

    /**
     *** @var float
     *
     ** @ORM\Column(name="verifier_split_pct", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $verifierSplitPct;

    /**
     *** @var \UserMain
     *
     ** @ORM\ManyToOne(targetEntity="UserMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     * })
     */
    private $userid;

    /**
     *** @var \OrderStatus
     *
     ** @ORM\ManyToOne(targetEntity="OrderStatus")
     ** @ORM\JoinColumn(name="order_status_id", referencedColumnName="order_status_id")
     */
    private $orderStatus;

    /**
     *** @var \SoldLocation
     *
     ** @ORM\ManyToOne(targetEntity="SoldLocation")
     ** @ORM\JoinColumn(name="sold_location", referencedColumnName="sold_location")
     */
    private $soldLocation;

    /**
     *** @var \Bonus
     *
     ** @ORM\ManyToOne(targetEntity="Bonus")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="cc_bonus_id", referencedColumnName="bonus_id")
     * })
     */
    private $ccBonus;

    /**
     *** @var \CustomerMain
     *
     ** @ORM\ManyToOne(targetEntity="CustomerMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="customer_main_id", referencedColumnName="customer_main_id")
     * })
     */
    private $customerMain;

    /**
     ** @ORM\OneToMany(targetEntity="OrderDetail", mappedBy="order_main_id")
     */
    private $orderDetail;




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
     * Set orderDate
     *
     ** @param \DateTime $orderDate
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     ** @return OrderMain
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
     * Set checkPostdate
     *
     ** @param \DateTime $checkPostdate
     ** @return OrderMain
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
     ** @return OrderMain
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

    /**
     * Set animatedBible
     *
     ** @param string $animatedBible
     ** @return OrderMain
     */
    public function setAnimatedBible($animatedBible)
    {
        $this->animatedBible = $animatedBible;

        return $this;
    }

    /**
     * Get animatedBible
     *
     ** @return string
     */
    public function getAnimatedBible()
    {
        return $this->animatedBible;
    }

    /**
     * Set notLds
     *
     ** @param string $notLds
     ** @return OrderMain
     */
    public function setNotLds($notLds)
    {
        $this->notLds = $notLds;

        return $this;
    }

    /**
     * Get notLds
     *
     ** @return string
     */
    public function getNotLds()
    {
        return $this->notLds;
    }

    /**
     * Set confirmationNumber
     *
     ** @param string $confirmationNumber
     ** @return OrderMain
     */
    public function setConfirmationNumber($confirmationNumber)
    {
        $this->confirmationNumber = $confirmationNumber;

        return $this;
    }

    /**
     * Get confirmationNumber
     *
     ** @return string
     */
    public function getConfirmationNumber()
    {
        return $this->confirmationNumber;
    }

    /**
     * Set expediteOptionId
     *
     ** @param integer $expediteOptionId
     ** @return OrderMain
     */
    public function setExpediteOptionId($expediteOptionId)
    {
        $this->expediteOptionId = $expediteOptionId;

        return $this;
    }

    /**
     * Get expediteOptionId
     *
     ** @return integer
     */
    public function getExpediteOptionId()
    {
        return $this->expediteOptionId;
    }

    /**
     * Set promo
     *
     ** @param string $promo
     ** @return OrderMain
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     ** @return string
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set verifierSlsmNo
     *
     ** @param integer $verifierSlsmNo
     ** @return OrderMain
     */
    public function setVerifierSlsmNo($verifierSlsmNo)
    {
        $this->verifierSlsmNo = $verifierSlsmNo;

        return $this;
    }

    /**
     * Get verifierSlsmNo
     *
     ** @return integer
     */
    public function getVerifierSlsmNo()
    {
        return $this->verifierSlsmNo;
    }

    /**
     * Set verifierSplitPct
     *
     ** @param float $verifierSplitPct
     ** @return OrderMain
     */
    public function setVerifierSplitPct($verifierSplitPct)
    {
        $this->verifierSplitPct = $verifierSplitPct;

        return $this;
    }

    /**
     * Get verifierSplitPct
     *
     ** @return float
     */
    public function getVerifierSplitPct()
    {
        return $this->verifierSplitPct;
    }

    /**
     * Set userid
     *
     ** @param \UserMain $userid
     ** @return OrderMain
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
     * Set orderStatus
     *
     ** @param \OrderStatus $orderStatus
     ** @return OrderMain
     */
    public function setOrderStatus(\LSI\SystemBundle\Entity\OrderStatus $orderStatus = null)
    {
        $this->orderStatus = $orderStatus;

        return $this;
    }

    /**
     * Get orderStatus
     *
     ** @return \OrderStatus
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * Set soldLocation
     *
     ** @param \SoldLocation $soldLocation
     ** @return OrderMain
     */
    public function setSoldLocation(\LSI\SystemBundle\Entity\SoldLocation $soldLocation = null)
    {
        $this->soldLocation = $soldLocation;

        return $this;
    }

    /**
     * Get soldLocation
     *
     ** @return \SoldLocation
     */
    public function getSoldLocation()
    {
        return $this->soldLocation;
    }

    /**
     * Set ccBonus
     *
     ** @param \Bonus $ccBonus
     ** @return OrderMain
     */
    public function setCcBonus(\LSI\SystemBundle\Entity\Bonus $ccBonus = null)
    {
        $this->ccBonus = $ccBonus;

        return $this;
    }

    /**
     * Get ccBonus
     *
     ** @return \Bonus
     */
    public function getCcBonus()
    {
        return $this->ccBonus;
    }

    /**
     * Set customerMain
     *
     ** @param \CustomerMain $customerMain
     ** @return OrderMain
     */
    public function setCustomerMain(\LSI\SystemBundle\Entity\CustomerMain $customerMain = null)
    {
        $this->customerMain = $customerMain;

        return $this;
    }

    /**
     * Get customerMain
     *
     ** @return \CustomerMain
     */
    public function getCustomerMain()
    {
        return $this->customerMain;
    }

    public function getOrderDetail()
    {
        return $this->orderDetail;
    }

}
