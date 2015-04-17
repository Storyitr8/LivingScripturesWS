<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 *
 ** @ORM\Table(name="order_detail")
 ** @ORM\Entity
 */
class OrderDetail
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="order_detail_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderDetailId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     *** @var float
     *
     ** @ORM\Column(name="product_price", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $productPrice;

    /**
     *** @var float
     *
     ** @ORM\Column(name="product_handling", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $productHandling;

    /**
     *** @var float
     *
     ** @ORM\Column(name="product_tax", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $productTax;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="product_upgrade", type="boolean", nullable=false)
     */
    private $productUpgrade;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="left_with_customer", type="boolean", nullable=false)
     */
    private $leftWithCustomer;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="shipping_order", type="smallint", nullable=true)
     */
    private $shippingOrder;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="dvd_shipping_order", type="integer", nullable=true)
     */
    private $dvdShippingOrder;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="ship_with_initial_shipment", type="boolean", nullable=false)
     */
    private $shipWithInitialShipment;

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
     *** @var \ProductMain
     *
     ** @ORM\ManyToOne(targetEntity="ProductMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="product_main_id", referencedColumnName="product_main_id")
     * })
     */
    private $productMain;

    /**
     *** @var \Bonus
     *
     ** @ORM\ManyToOne(targetEntity="Bonus")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="bonus_id", referencedColumnName="bonus_id")
     * })
     */
    private $bonus;


    /**
     * Get orderDetailId
     *
     ** @return integer
     */
    public function getOrderDetailId()
    {
        return $this->orderDetailId;
    }

    /**
     * Set quantity
     *
     ** @param integer $quantity
     ** @return OrderDetail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     ** @return integer
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set productPrice
     *
     ** @param float $productPrice
     ** @return OrderDetail
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     ** @return float
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productHandling
     *
     ** @param float $productHandling
     ** @return OrderDetail
     */
    public function setProductHandling($productHandling)
    {
        $this->productHandling = $productHandling;

        return $this;
    }

    /**
     * Get productHandling
     *
     ** @return float
     */
    public function getProductHandling()
    {
        return $this->productHandling;
    }

    /**
     * Set productTax
     *
     ** @param float $productTax
     ** @return OrderDetail
     */
    public function setProductTax($productTax)
    {
        $this->productTax = $productTax;

        return $this;
    }

    /**
     * Get productTax
     *
     ** @return float
     */
    public function getProductTax()
    {
        return $this->productTax;
    }

    /**
     * Set productUpgrade
     *
     ** @param boolean $productUpgrade
     ** @return OrderDetail
     */
    public function setProductUpgrade($productUpgrade)
    {
        $this->productUpgrade = $productUpgrade;

        return $this;
    }

    /**
     * Get productUpgrade
     *
     ** @return boolean
     */
    public function getProductUpgrade()
    {
        return $this->productUpgrade;
    }

    /**
     * Set leftWithCustomer
     *
     ** @param boolean $leftWithCustomer
     ** @return OrderDetail
     */
    public function setLeftWithCustomer($leftWithCustomer)
    {
        $this->leftWithCustomer = $leftWithCustomer;

        return $this;
    }

    /**
     * Get leftWithCustomer
     *
     ** @return boolean
     */
    public function getLeftWithCustomer()
    {
        return $this->leftWithCustomer;
    }

    /**
     * Set shippingOrder
     *
     ** @param integer $shippingOrder
     ** @return OrderDetail
     */
    public function setShippingOrder($shippingOrder)
    {
        $this->shippingOrder = $shippingOrder;

        return $this;
    }

    /**
     * Get shippingOrder
     *
     ** @return integer
     */
    public function getShippingOrder()
    {
        return $this->shippingOrder;
    }

    /**
     * Set dvdShippingOrder
     *
     ** @param integer $dvdShippingOrder
     ** @return OrderDetail
     */
    public function setDvdShippingOrder($dvdShippingOrder)
    {
        $this->dvdShippingOrder = $dvdShippingOrder;

        return $this;
    }

    /**
     * Get dvdShippingOrder
     *
     ** @return integer
     */
    public function getDvdShippingOrder()
    {
        return $this->dvdShippingOrder;
    }

    /**
     * Set shipWithInitialShipment
     *
     ** @param boolean $shipWithInitialShipment
     ** @return OrderDetail
     */
    public function setShipWithInitialShipment($shipWithInitialShipment)
    {
        $this->shipWithInitialShipment = $shipWithInitialShipment;

        return $this;
    }

    /**
     * Get shipWithInitialShipment
     *
     ** @return boolean
     */
    public function getShipWithInitialShipment()
    {
        return $this->shipWithInitialShipment;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return OrderDetail
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
     ** @return OrderDetail
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
     ** @return OrderDetail
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
     ** @return OrderDetail
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
     ** @return OrderDetail
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
     * Set productMain
     *
     ** @param \ProductMain $productMain
     ** @return OrderDetail
     */
    public function setProductMain(\LSI\SystemBundle\Entity\ProductMain $productMain = null)
    {
        $this->productMain = $productMain;

        return $this;
    }

    /**
     * Get productMain
     *
     ** @return \ProductMain
     */
    public function getProductMain()
    {
        return $this->productMain;
    }

    /**
     * Set bonus
     *
     ** @param \Bonus $bonus
     ** @return OrderDetail
     */
    public function setBonus(\LSI\SystemBundle\Entity\Bonus $bonus = null)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     ** @return \Bonus
     */
    public function getBonus()
    {
        return $this->bonus;
    }
}
