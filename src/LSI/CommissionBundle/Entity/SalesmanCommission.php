<?php
namespace LSI\CommissionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;

/**
 * @ORM\Entity
 * @JMS\ExclusionPolicy("all")
 */
class SalesmanCommission
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="LSI\UserBundle\Entity\User", inversedBy="commissions")
     * @ORM\JoinColumn(name="user", referencedColumnName="id")
     */
    protected $user;

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
     * @ORM\ManyToOne(targetEntity="LSI\CustomerBundle\Entity\Customer", inversedBy="commissions")
     * @ORM\JoinColumn(name="customer", referencedColumnName="id")
     *
     */
    protected $customer;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $order_number;

    /**
     * @ORM\Column(type="string")
     * @JMS\Expose
     */
    protected $status;

    /**
     * @ORM\Column(type="text")
     * @JMS\Expose
     */
    protected $status_message;

    /**
     * @ORM\Column(type="decimal", scale=4, precision=10 )
     * @JMS\Expose
     */
    protected $upfront_pay;

    /**
     * @ORM\Column(type="decimal", scale=4, precision=10 )
     * @JMS\Expose
     */
    protected $base_commission;

    /**
     * @ORM\Column(type="decimal", scale=4, precision=10 )
     * @JMS\Expose
     */
    protected $override_commission;

    /**
     * @ORM\Column(type="integer")
     * @JMS\Expose
     */
    protected $parcels;

    /**
     * @ORM\Column(type="integer")
     * @JMS\Expose
     */
    protected $frequency;

    /**
     * @ORM\Column(type="decimal", scale=2, precision=5 )
     * @JMS\Expose
     */
    protected $sets;

    /**
     * @ORM\Column(type="integer")
     * @JMS\Expose
     */
    protected $dvds;

    /**
     * @ORM\Column(type="integer")
     * @JMS\Expose
     */
    protected $upgrades;

    /**
     * @ORM\Column(type="array")
     * @JMS\Expose
     */
    protected $product;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @JMS\Expose
     */
    protected $rep_name_code;


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

    public function getCustomer()
    {
        return $this->customer;
    }

    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setOrder($order)
    {
        $this->order = $order;
        return $this;
    }

    public function getOrderDate()
    {
        return $this->order_date;
    }

    public function setOrderDate($order_date)
    {
        $this->order_date = $order_date;
        return $this;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public function getStatusMessage()
    {
        return $this->status_message;
    }

    public function setStatusMessage($status_message)
    {
        $this->status_message = $status_message;
        return $this;
    }

    public function getUpfrontPay()
    {
        return $this->upfront_pay;
    }

    public function setUpfrontPay($upfront_pay)
    {
        $this->upfront_pay = $upfront_pay;
        return $this;
    }

    public function getBaseCommission()
    {
        return $this->base_commission;
    }

    public function setBaseCommission($base_commission)
    {
        $this->base_commission = $base_commission;
        return $this;
    }

    public function getOverrideCommission()
    {
        return $this->override_commission;
    }

    public function setOverrideCommission($override_commission)
    {
        $this->override_commission = $override_commission;
        return $this;
    }

    public function getOrderNumber()
    {
        return $this->order_number;
    }

    public function setOrderNumber($order_number)
    {
        $this->order_number = $order_number;
        return $this;
    }

    public function getParcels()
    {
        return $this->parcels;
    }

    public function setParcels($parcels)
    {
        $this->parcels = $parcels;
        return $this;
    }

    public function getFrequency()
    {
        return $this->frequency;
    }

    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }

    public function getSets()
    {
        return $this->sets;
    }

    public function setSets($sets)
    {
        $this->sets = $sets;
        return $this;
    }

    public function getDvds()
    {
        return $this->dvds;
    }

    public function setDvds($dvds)
    {
        $this->dvds = $dvds;
        return $this;
    }

    public function getUpgrades()
    {
        return $this->upgrades;
    }

    public function setUpgrades($upgrades)
    {
        $this->upgrades = $upgrades;
        return $this;
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function getRepNameCode()
    {
        return $this->rep_name_code;
    }

    public function setRepNameCode($rep_name_code)
    {
        $this->rep_name_code = $rep_name_code;
        return $this;
    }
}