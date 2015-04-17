<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PaymentCardMain
 *
 ** @ORM\Table(name="payment_card_main")
 ** @ORM\Entity
 */
class PaymentCardMain
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="payment_card_main_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentCardMainId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="cc_number", type="string", length=16, nullable=true)
     */
    private $ccNumber;

    /**
     *** @var string
     *
     ** @ORM\Column(name="cc_exp_month", type="string", length=2, nullable=true)
     */
    private $ccExpMonth;

    /**
     *** @var string
     *
     ** @ORM\Column(name="cc_exp_year", type="string", length=4, nullable=true)
     */
    private $ccExpYear;

    /**
     *** @var string
     *
     ** @ORM\Column(name="cc_id", type="string", length=4, nullable=true)
     */
    private $ccId;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="cc_signature", type="boolean", nullable=false)
     */
    private $ccSignature;

    /**
     *** @var string
     *
     ** @ORM\Column(name="bank_num", type="string", length=25, nullable=true)
     */
    private $bankNum;

    /**
     *** @var string
     *
     ** @ORM\Column(name="routing_num", type="string", length=25, nullable=true)
     */
    private $routingNum;

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
     *** @var \OrderMain
     *
     ** @ORM\ManyToOne(targetEntity="OrderMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="order_main_id", referencedColumnName="order_main_id")
     * })
     */
    private $orderMain;

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
     * Get paymentCardMainId
     *
     ** @return integer
     */
    public function getPaymentCardMainId()
    {
        return $this->paymentCardMainId;
    }

    /**
     * Set ccNumber
     *
     ** @param string $ccNumber
     ** @return PaymentCardMain
     */
    public function setCcNumber($ccNumber)
    {
        $this->ccNumber = $ccNumber;

        return $this;
    }

    /**
     * Get ccNumber
     *
     ** @return string
     */
    public function getCcNumber()
    {
        return $this->ccNumber;
    }

    /**
     * Set ccExpMonth
     *
     ** @param string $ccExpMonth
     ** @return PaymentCardMain
     */
    public function setCcExpMonth($ccExpMonth)
    {
        $this->ccExpMonth = $ccExpMonth;

        return $this;
    }

    /**
     * Get ccExpMonth
     *
     ** @return string
     */
    public function getCcExpMonth()
    {
        return $this->ccExpMonth;
    }

    /**
     * Set ccExpYear
     *
     ** @param string $ccExpYear
     ** @return PaymentCardMain
     */
    public function setCcExpYear($ccExpYear)
    {
        $this->ccExpYear = $ccExpYear;

        return $this;
    }

    /**
     * Get ccExpYear
     *
     ** @return string
     */
    public function getCcExpYear()
    {
        return $this->ccExpYear;
    }

    /**
     * Set ccId
     *
     ** @param string $ccId
     ** @return PaymentCardMain
     */
    public function setCcId($ccId)
    {
        $this->ccId = $ccId;

        return $this;
    }

    /**
     * Get ccId
     *
     ** @return string
     */
    public function getCcId()
    {
        return $this->ccId;
    }

    /**
     * Set ccSignature
     *
     ** @param boolean $ccSignature
     ** @return PaymentCardMain
     */
    public function setCcSignature($ccSignature)
    {
        $this->ccSignature = $ccSignature;

        return $this;
    }

    /**
     * Get ccSignature
     *
     ** @return boolean
     */
    public function getCcSignature()
    {
        return $this->ccSignature;
    }

    /**
     * Set bankNum
     *
     ** @param string $bankNum
     ** @return PaymentCardMain
     */
    public function setBankNum($bankNum)
    {
        $this->bankNum = $bankNum;

        return $this;
    }

    /**
     * Get bankNum
     *
     ** @return string
     */
    public function getBankNum()
    {
        return $this->bankNum;
    }

    /**
     * Set routingNum
     *
     ** @param string $routingNum
     ** @return PaymentCardMain
     */
    public function setRoutingNum($routingNum)
    {
        $this->routingNum = $routingNum;

        return $this;
    }

    /**
     * Get routingNum
     *
     ** @return string
     */
    public function getRoutingNum()
    {
        return $this->routingNum;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return PaymentCardMain
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
     ** @return PaymentCardMain
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
     ** @return PaymentCardMain
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
     ** @return PaymentCardMain
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
     * Set orderMain
     *
     ** @param \OrderMain $orderMain
     ** @return PaymentCardMain
     */
    public function setOrderMain(\LSI\SystemBundle\Entity\OrderMain $orderMain = null)
    {
        $this->orderMain = $orderMain;

        return $this;
    }

    /**
     * Get orderMain
     *
     ** @return \OrderMain
     */
    public function getOrderMain()
    {
        return $this->orderMain;
    }

    /**
     * Set customerMain
     *
     ** @param \CustomerMain $customerMain
     ** @return PaymentCardMain
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
}
