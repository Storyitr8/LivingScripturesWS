<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderDetail
 *
 * @ORM\Table(name="order_detail", indexes={@ORM\Index(name="fk_orderdetail_ordermain", columns={"order_main_id"}), @ORM\Index(name="fk_orderdetail_productmain", columns={"product_main_id"}), @ORM\Index(name="fk_orderdetail_bonus", columns={"bonus_id"})})
 * @ORM\Entity
 */
class OrderDetail
{
    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var string
     *
     * @ORM\Column(name="product_price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $productPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="product_handling", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $productHandling;

    /**
     * @var string
     *
     * @ORM\Column(name="product_tax", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $productTax;

    /**
     * @var boolean
     *
     * @ORM\Column(name="product_upgrade", type="boolean", nullable=false)
     */
    private $productUpgrade;

    /**
     * @var boolean
     *
     * @ORM\Column(name="left_with_customer", type="boolean", nullable=false)
     */
    private $leftWithCustomer;

    /**
     * @var boolean
     *
     * @ORM\Column(name="shipping_order", type="boolean", nullable=true)
     */
    private $shippingOrder;

    /**
     * @var integer
     *
     * @ORM\Column(name="dvd_shipping_order", type="integer", nullable=true)
     */
    private $dvdShippingOrder;

    /**
     * @var boolean
     *
     * @ORM\Column(name="ship_with_initial_shipment", type="boolean", nullable=false)
     */
    private $shipWithInitialShipment;

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
     * @ORM\Column(name="order_detail_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $orderDetailId;

    /**
     * @var \LSI\SystemBundle\Entity\Bonus
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\Bonus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="bonus_id", referencedColumnName="bonus_id")
     * })
     */
    private $bonus;

    /**
     * @var \LSI\SystemBundle\Entity\ProductMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\ProductMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_main_id", referencedColumnName="product_main_id")
     * })
     */
    private $productMain;

    /**
     * @var \LSI\SystemBundle\Entity\OrderMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\OrderMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="order_main_id", referencedColumnName="order_main_id")
     * })
     */
    private $orderMain;



    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return OrderDetail
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set productPrice
     *
     * @param string $productPrice
     * @return OrderDetail
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;

        return $this;
    }

    /**
     * Get productPrice
     *
     * @return string 
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * Set productHandling
     *
     * @param string $productHandling
     * @return OrderDetail
     */
    public function setProductHandling($productHandling)
    {
        $this->productHandling = $productHandling;

        return $this;
    }

    /**
     * Get productHandling
     *
     * @return string 
     */
    public function getProductHandling()
    {
        return $this->productHandling;
    }

    /**
     * Set productTax
     *
     * @param string $productTax
     * @return OrderDetail
     */
    public function setProductTax($productTax)
    {
        $this->productTax = $productTax;

        return $this;
    }

    /**
     * Get productTax
     *
     * @return string 
     */
    public function getProductTax()
    {
        return $this->productTax;
    }

    /**
     * Set productUpgrade
     *
     * @param boolean $productUpgrade
     * @return OrderDetail
     */
    public function setProductUpgrade($productUpgrade)
    {
        $this->productUpgrade = $productUpgrade;

        return $this;
    }

    /**
     * Get productUpgrade
     *
     * @return boolean 
     */
    public function getProductUpgrade()
    {
        return $this->productUpgrade;
    }

    /**
     * Set leftWithCustomer
     *
     * @param boolean $leftWithCustomer
     * @return OrderDetail
     */
    public function setLeftWithCustomer($leftWithCustomer)
    {
        $this->leftWithCustomer = $leftWithCustomer;

        return $this;
    }

    /**
     * Get leftWithCustomer
     *
     * @return boolean 
     */
    public function getLeftWithCustomer()
    {
        return $this->leftWithCustomer;
    }

    /**
     * Set shippingOrder
     *
     * @param boolean $shippingOrder
     * @return OrderDetail
     */
    public function setShippingOrder($shippingOrder)
    {
        $this->shippingOrder = $shippingOrder;

        return $this;
    }

    /**
     * Get shippingOrder
     *
     * @return boolean 
     */
    public function getShippingOrder()
    {
        return $this->shippingOrder;
    }

    /**
     * Set dvdShippingOrder
     *
     * @param integer $dvdShippingOrder
     * @return OrderDetail
     */
    public function setDvdShippingOrder($dvdShippingOrder)
    {
        $this->dvdShippingOrder = $dvdShippingOrder;

        return $this;
    }

    /**
     * Get dvdShippingOrder
     *
     * @return integer 
     */
    public function getDvdShippingOrder()
    {
        return $this->dvdShippingOrder;
    }

    /**
     * Set shipWithInitialShipment
     *
     * @param boolean $shipWithInitialShipment
     * @return OrderDetail
     */
    public function setShipWithInitialShipment($shipWithInitialShipment)
    {
        $this->shipWithInitialShipment = $shipWithInitialShipment;

        return $this;
    }

    /**
     * Get shipWithInitialShipment
     *
     * @return boolean 
     */
    public function getShipWithInitialShipment()
    {
        return $this->shipWithInitialShipment;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return OrderDetail
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
     * @return OrderDetail
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
     * @return OrderDetail
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
     * @return OrderDetail
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
     * Get orderDetailId
     *
     * @return integer 
     */
    public function getOrderDetailId()
    {
        return $this->orderDetailId;
    }

    /**
     * Set bonus
     *
     * @param \LSI\SystemBundle\Entity\Bonus $bonus
     * @return OrderDetail
     */
    public function setBonus(\LSI\SystemBundle\Entity\Bonus $bonus = null)
    {
        $this->bonus = $bonus;

        return $this;
    }

    /**
     * Get bonus
     *
     * @return \LSI\SystemBundle\Entity\Bonus 
     */
    public function getBonus()
    {
        return $this->bonus;
    }

    /**
     * Set productMain
     *
     * @param \LSI\SystemBundle\Entity\ProductMain $productMain
     * @return OrderDetail
     */
    public function setProductMain(\LSI\SystemBundle\Entity\ProductMain $productMain = null)
    {
        $this->productMain = $productMain;

        return $this;
    }

    /**
     * Get productMain
     *
     * @return \LSI\SystemBundle\Entity\ProductMain 
     */
    public function getProductMain()
    {
        return $this->productMain;
    }

    /**
     * Set orderMain
     *
     * @param \LSI\SystemBundle\Entity\OrderMain $orderMain
     * @return OrderDetail
     */
    public function setOrderMain(\LSI\SystemBundle\Entity\OrderMain $orderMain = null)
    {
        $this->orderMain = $orderMain;

        return $this;
    }

    /**
     * Get orderMain
     *
     * @return \LSI\SystemBundle\Entity\OrderMain 
     */
    public function getOrderMain()
    {
        return $this->orderMain;
    }
}
