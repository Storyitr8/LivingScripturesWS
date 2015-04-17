<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSeries
 *
 * @ORM\Table(name="product_series", indexes={@ORM\Index(name="fk_productseries_type", columns={"product_type"})})
 * @ORM\Entity
 */
class ProductSeries
{
    /**
     * @var string
     *
     * @ORM\Column(name="product_series_desc", type="string", length=60, nullable=false)
     */
    private $productSeriesDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="sort_order", type="boolean", nullable=false)
     */
    private $sortOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="active_status", type="string", length=1, nullable=false)
     */
    private $activeStatus;

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
     * @var string
     *
     * @ORM\Column(name="product_series", type="string", length=50)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productSeries;

    /**
     * @var \LSI\SystemBundle\Entity\ProductType
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\ProductType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_type", referencedColumnName="product_type")
     * })
     */
    private $productType;



    /**
     * Set productSeriesDesc
     *
     * @param string $productSeriesDesc
     * @return ProductSeries
     */
    public function setProductSeriesDesc($productSeriesDesc)
    {
        $this->productSeriesDesc = $productSeriesDesc;

        return $this;
    }

    /**
     * Get productSeriesDesc
     *
     * @return string 
     */
    public function getProductSeriesDesc()
    {
        return $this->productSeriesDesc;
    }

    /**
     * Set sortOrder
     *
     * @param boolean $sortOrder
     * @return ProductSeries
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return boolean 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return ProductSeries
     */
    public function setActiveStatus($activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }

    /**
     * Get activeStatus
     *
     * @return string 
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return ProductSeries
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
     * @return ProductSeries
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
     * @return ProductSeries
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
     * @return ProductSeries
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
     * Get productSeries
     *
     * @return string 
     */
    public function getProductSeries()
    {
        return $this->productSeries;
    }

    /**
     * Set productType
     *
     * @param \LSI\SystemBundle\Entity\ProductType $productType
     * @return ProductSeries
     */
    public function setProductType(\LSI\SystemBundle\Entity\ProductType $productType = null)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     * @return \LSI\SystemBundle\Entity\ProductType 
     */
    public function getProductType()
    {
        return $this->productType;
    }
}
