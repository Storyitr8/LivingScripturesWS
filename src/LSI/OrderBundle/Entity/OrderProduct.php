<?php

namespace LSI\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class OrderProduct
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name_file_number;

    /**
     * @ORM\Column(type="string")
     */
    protected $product_code;

    /**
     * @ORM\Column(type="string")
     */
    protected $product_number;

    /**
     * @ORM\Column(type="string")
     */
    protected $color;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $ship_date;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $cancelled;

    /**
     * @ORM\Column(type="date")
     */
    protected $order_date;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getNameFileNumber()
    {
        return $this->name_file_number;
    }

    public function setNameFileNumber($name_file_number)
    {
        $this->name_file_number = $name_file_number;
        return $this;
    }

    public function getProductCode()
    {
        return $this->product_code;
    }

    public function setProductCode($product_code)
    {
        $this->product_code = $product_code;
        return $this;
    }

    public function getProductNumber()
    {
        return $this->product_number;
    }

    public function setProductNumber($product_number)
    {
        $this->product_number = $product_number;
        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function getShipDate()
    {
        return $this->ship_date;
    }

    public function setShipDate($ship_date)
    {
        $this->ship_date = $ship_date;
        return $this;
    }

    public function getCancelled()
    {
        return $this->cancelled;
    }

    public function setCancelled($cancelled)
    {
        $this->cancelled = $cancelled;
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

}