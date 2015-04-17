<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportedReportCommission
 *
 ** @ORM\Table(name="imported_report_commission")
 ** @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ImportedReportCommissionRepository")
 */
class ImportedReportCommission
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`group`", type="string", length=50, nullable=true)
     */
    private $group;

    /**
     *** @var string
     *
     ** @ORM\Column(name="team", type="string", length=50, nullable=true)
     */
    private $team;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="`slsm-no`", type="integer", nullable=true)
     */
    private $slsmNo;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`week`", type="string", length=50, nullable=true)
     */
    private $week;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="`date`", type="date", nullable=true)
     */
    private $date;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`cust-no`", type="string", length=50, nullable=true)
     */
    private $custNo;

    /**
     *** @var string
     *
     ** @ORM\Column(name="parcels", type="string", length=50, nullable=true)
     */
    private $parcels;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`frequency`", type="string", length=50, nullable=true)
     */
    private $frequency;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`sets`", type="decimal", precision=10, scale=2, nullable=true)
     */
    private $sets;

    /**
     *** @var string
     *
     ** @ORM\Column(name="dvds", type="string", length=50, nullable=true)
     */
    private $dvds;

    /**
     *** @var string
     *
     ** @ORM\Column(name="upgrades", type="string", length=50, nullable=true)
     */
    private $upgrades;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`product`", type="string", length=50, nullable=true)
     */
    private $product;

    /**
     *** @var float
     *
     ** @ORM\Column(name="`override-comm`", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $overrideComm;

    /**
     *** @var float
     *
     ** @ORM\Column(name="`base-comm`", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $baseComm;

    /**
     *** @var float
     *
     ** @ORM\Column(name="`upfront-pay`", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $upfrontPay;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`status`", type="string", length=50, nullable=true)
     */
    private $status;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`cust-fname`", type="string", length=50, nullable=true)
     */
    private $custFname;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`cust-lname`", type="string", length=50, nullable=true)
     */
    private $custLname;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="`order-no`", type="integer", nullable=true)
     */
    private $orderNo;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`rep-name-code`", type="string", length=50, nullable=true)
     */
    private $repNameCode;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="`order_date`", type="date", nullable=true)
     */
    private $orderDate;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`status_message`", type="string", length=50, nullable=true)
     */
    private $statusMessage;


    /**
     * Get id
     *
     ** @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set group
     *
     ** @param string $group
     ** @return ImportedReportCommission
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     ** @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set team
     *
     ** @param string $team
     ** @return ImportedReportCommission
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     ** @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set slsmNo
     *
     ** @param integer $slsmNo
     ** @return ImportedReportCommission
     */
    public function setSlsmNo($slsmNo)
    {
        if(is_string($slsmNo)){
            $slsmNo = intval($slsmNo);
        }
        $this->slsmNo = $slsmNo;

        return $this;
    }

    /**
     * Get slsmNo
     *
     ** @return integer
     */
    public function getSlsmNo()
    {
        return $this->slsmNo;
    }

    /**
     * Set week
     *
     ** @param string $week
     ** @return ImportedReportCommission
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     ** @return string
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set date
     *
     ** @param \DateTime $date
     ** @return ImportedReportCommission
     */
    public function setDate($date)
    {
        if(is_string($date)){
            $date = new \DateTime($date);
        }
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

    /**
     * Set custNo
     *
     ** @param string $custNo
     ** @return ImportedReportCommission
     */
    public function setCustNo($custNo)
    {
        $this->custNo = $custNo;

        return $this;
    }

    /**
     * Get custNo
     *
     ** @return string
     */
    public function getCustNo()
    {
        return $this->custNo;
    }

    /**
     * Set parcels
     *
     ** @param string $parcels
     ** @return ImportedReportCommission
     */
    public function setParcels($parcels)
    {
        $this->parcels = $parcels;

        return $this;
    }

    /**
     * Get parcels
     *
     ** @return string
     */
    public function getParcels()
    {
        return $this->parcels;
    }

    /**
     * Set frequency
     *
     ** @param string $frequency
     ** @return ImportedReportCommission
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     ** @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Set sets
     *
     ** @param string $sets
     ** @return ImportedReportCommission
     */
    public function setSets($sets)
    {
        $this->sets = floatval($sets);

        return $this;
    }

    /**
     * Get sets
     *
     ** @return string
     */
    public function getSets()
    {
        return $this->sets;
    }

    /**
     * Set dvds
     *
     ** @param string $dvds
     ** @return ImportedReportCommission
     */
    public function setDvds($dvds)
    {
        $this->dvds = $dvds;

        return $this;
    }

    /**
     * Get dvds
     *
     ** @return string
     */
    public function getDvds()
    {
        return $this->dvds;
    }

    /**
     * Set upgrades
     *
     ** @param string $upgrades
     ** @return ImportedReportCommission
     */
    public function setUpgrades($upgrades)
    {
        $this->upgrades = $upgrades;

        return $this;
    }

    /**
     * Get upgrades
     *
     ** @return string
     */
    public function getUpgrades()
    {
        return $this->upgrades;
    }

    /**
     * Set product
     *
     ** @param string $product
     ** @return ImportedReportCommission
     */
    public function setProduct($product)
    {
        $this->product = $product;

        return $this;
    }

    /**
     * Get product
     *
     ** @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * Set overrideComm
     *
     ** @param float $overrideComm
     ** @return ImportedReportCommission
     */
    public function setOverrideComm($overrideComm)
    {
        if(is_string($overrideComm)){
            $overrideComm = floatval($overrideComm);
        }
        $this->overrideComm = $overrideComm;

        return $this;
    }

    /**
     * Get overrideComm
     *
     ** @return float
     */
    public function getOverrideComm()
    {
        return $this->overrideComm;
    }

    /**
     * Set baseComm
     *
     ** @param float $baseComm
     ** @return ImportedReportCommission
     */
    public function setBaseComm($baseComm)
    {
        if(is_string($baseComm)){
            $baseComm = floatval($baseComm);
        }
        $this->baseComm = $baseComm;

        return $this;
    }

    /**
     * Get baseComm
     *
     ** @return float
     */
    public function getBaseComm()
    {
        return $this->baseComm;
    }

    /**
     * Set upfrontPay
     *
     ** @param float $upfrontPay
     ** @return ImportedReportCommission
     */
    public function setUpfrontPay($upfrontPay)
    {
        if(is_string($upfrontPay)){
            $upfrontPay = floatval($upfrontPay);
        }
        $this->upfrontPay = $upfrontPay;

        return $this;
    }

    /**
     * Get upfrontPay
     *
     ** @return float
     */
    public function getUpfrontPay()
    {
        return $this->upfrontPay;
    }

    /**
     * Set status
     *
     ** @param string $status
     ** @return ImportedReportCommission
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     ** @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set custFname
     *
     ** @param string $custFname
     ** @return ImportedReportCommission
     */
    public function setCustFname($custFname)
    {
        $this->custFname = $custFname;

        return $this;
    }

    /**
     * Get custFname
     *
     ** @return string
     */
    public function getCustFname()
    {
        return $this->custFname;
    }

    /**
     * Set custLname
     *
     ** @param string $custLname
     ** @return ImportedReportCommission
     */
    public function setCustLname($custLname)
    {
        $this->custLname = $custLname;

        return $this;
    }

    /**
     * Get custLname
     *
     ** @return string
     */
    public function getCustLname()
    {
        return $this->custLname;
    }

    /**
     * Set orderNo
     *
     ** @param integer $orderNo
     ** @return ImportedReportCommission
     */
    public function setOrderNo($orderNo)
    {
        if(is_string($orderNo)){
            $orderNo = intval($orderNo);
        }
        $this->orderNo = $orderNo;

        return $this;
    }

    /**
     * Get orderNo
     *
     ** @return integer
     */
    public function getOrderNo()
    {
        return $this->orderNo;
    }

    /**
     * Set repNameCode
     *
     ** @param string $repNameCode
     ** @return ImportedReportCommission
     */
    public function setRepNameCode($repNameCode)
    {
        $this->repNameCode = $repNameCode;

        return $this;
    }

    /**
     * Get repNameCode
     *
     ** @return string
     */
    public function getRepNameCode()
    {
        return $this->repNameCode;
    }

    /**
     * Set orderDate
     *
     ** @param \DateTime $orderDate
     ** @return ImportedReportCommission
     */
    public function setOrderDate($orderDate)
    {
        if(is_string($orderDate)){
            $orderDate = new \DateTime($orderDate);
        }
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

    public function getStatusMessage()
    {
        return $this->statusMessage;
    }

    public function setStatusMessage($statusMessage)
    {
        $this->statusMessage = $statusMessage;
        return $this;
    }
}
