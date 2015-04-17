<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductMain
 *
 * @ORM\Table(name="product_main", indexes={@ORM\Index(name="fk_productmain_series", columns={"product_series"})})
 * @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ProductMainRepository")
 */
class ProductMain
{
    /**
     * @var string
     *
     * @ORM\Column(name="start_tape_number", type="string", length=2, nullable=false)
     */
    private $startTapeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="end_tape_number", type="string", length=2, nullable=true)
     */
    private $endTapeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="product_desc", type="string", length=60, nullable=false)
     */
    private $productDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="retail_price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $retailPrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="retail_bonus_eligible", type="boolean", nullable=false)
     */
    private $retailBonusEligible;

    /**
     * @var string
     *
     * @ORM\Column(name="upgrade_price", type="decimal", precision=6, scale=2, nullable=false)
     */
    private $upgradePrice;

    /**
     * @var boolean
     *
     * @ORM\Column(name="upgrade_bonus_eligible", type="boolean", nullable=false)
     */
    private $upgradeBonusEligible;

    /**
     * @var integer
     *
     * @ORM\Column(name="sort_order", type="integer", nullable=false)
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
     * @var integer
     *
     * @ORM\Column(name="product_main_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productMainId;

    /**
     * @var \LSI\SystemBundle\Entity\ProductSeries
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\ProductSeries")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_series", referencedColumnName="product_series")
     * })
     */
    private $productSeries;



    /**
     * Set startTapeNumber
     *
     * @param string $startTapeNumber
     * @return ProductMain
     */
    public function setStartTapeNumber($startTapeNumber)
    {
        $this->startTapeNumber = $startTapeNumber;

        return $this;
    }

    /**
     * Get startTapeNumber
     *
     * @return string 
     */
    public function getStartTapeNumber()
    {
        return $this->startTapeNumber;
    }

    /**
     * Set endTapeNumber
     *
     * @param string $endTapeNumber
     * @return ProductMain
     */
    public function setEndTapeNumber($endTapeNumber)
    {
        $this->endTapeNumber = $endTapeNumber;

        return $this;
    }

    /**
     * Get endTapeNumber
     *
     * @return string 
     */
    public function getEndTapeNumber()
    {
        return $this->endTapeNumber;
    }

    /**
     * Set productDesc
     *
     * @param string $productDesc
     * @return ProductMain
     */
    public function setProductDesc($productDesc)
    {
        $this->productDesc = $productDesc;

        return $this;
    }

    /**
     * Get productDesc
     *
     * @return string 
     */
    public function getProductDesc()
    {
        return $this->productDesc;
    }

    /**
     * Set retailPrice
     *
     * @param string $retailPrice
     * @return ProductMain
     */
    public function setRetailPrice($retailPrice)
    {
        $this->retailPrice = $retailPrice;

        return $this;
    }

    /**
     * Get retailPrice
     *
     * @return string 
     */
    public function getRetailPrice()
    {
        return $this->retailPrice;
    }

    /**
     * Set retailBonusEligible
     *
     * @param boolean $retailBonusEligible
     * @return ProductMain
     */
    public function setRetailBonusEligible($retailBonusEligible)
    {
        $this->retailBonusEligible = $retailBonusEligible;

        return $this;
    }

    /**
     * Get retailBonusEligible
     *
     * @return boolean 
     */
    public function getRetailBonusEligible()
    {
        return $this->retailBonusEligible;
    }

    /**
     * Set upgradePrice
     *
     * @param string $upgradePrice
     * @return ProductMain
     */
    public function setUpgradePrice($upgradePrice)
    {
        $this->upgradePrice = $upgradePrice;

        return $this;
    }

    /**
     * Get upgradePrice
     *
     * @return string 
     */
    public function getUpgradePrice()
    {
        return $this->upgradePrice;
    }

    /**
     * Set upgradeBonusEligible
     *
     * @param boolean $upgradeBonusEligible
     * @return ProductMain
     */
    public function setUpgradeBonusEligible($upgradeBonusEligible)
    {
        $this->upgradeBonusEligible = $upgradeBonusEligible;

        return $this;
    }

    /**
     * Get upgradeBonusEligible
     *
     * @return boolean 
     */
    public function getUpgradeBonusEligible()
    {
        return $this->upgradeBonusEligible;
    }

    /**
     * Set sortOrder
     *
     * @param integer $sortOrder
     * @return ProductMain
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return integer 
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return ProductMain
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
     * @return ProductMain
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
     * @return ProductMain
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
     * @return ProductMain
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
     * @return ProductMain
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
     * Get productMainId
     *
     * @return integer 
     */
    public function getProductMainId()
    {
        return $this->productMainId;
    }

    /**
     * Set productSeries
     *
     * @param \LSI\SystemBundle\Entity\ProductSeries $productSeries
     * @return ProductMain
     */
    public function setProductSeries(\LSI\SystemBundle\Entity\ProductSeries $productSeries = null)
    {
        $this->productSeries = $productSeries;

        return $this;
    }

    /**
     * Get productSeries
     *
     * @return \LSI\SystemBundle\Entity\ProductSeries 
     */
    public function getProductSeries()
    {
        return $this->productSeries;
    }
}
