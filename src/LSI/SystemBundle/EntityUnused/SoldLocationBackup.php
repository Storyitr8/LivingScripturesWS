<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SoldLocationBackup
 *
 * @ORM\Table(name="sold_location_backup")
 * @ORM\Entity
 */
class SoldLocationBackup
{
    /**
     * @var string
     *
     * @ORM\Column(name="sold_location_desc", type="string", length=30, nullable=false)
     */
    private $soldLocationDesc;

    /**
     * @var boolean
     *
     * @ORM\Column(name="summer_sales_bit", type="boolean", nullable=false)
     */
    private $summerSalesBit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="fulltime_sales_bit", type="boolean", nullable=false)
     */
    private $fulltimeSalesBit;

    /**
     * @var boolean
     *
     * @ORM\Column(name="inside_sales_bit", type="boolean", nullable=false)
     */
    private $insideSalesBit;

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
     * @ORM\Column(name="sold_location", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $soldLocation;



    /**
     * Set soldLocationDesc
     *
     * @param string $soldLocationDesc
     * @return SoldLocationBackup
     */
    public function setSoldLocationDesc($soldLocationDesc)
    {
        $this->soldLocationDesc = $soldLocationDesc;

        return $this;
    }

    /**
     * Get soldLocationDesc
     *
     * @return string 
     */
    public function getSoldLocationDesc()
    {
        return $this->soldLocationDesc;
    }

    /**
     * Set summerSalesBit
     *
     * @param boolean $summerSalesBit
     * @return SoldLocationBackup
     */
    public function setSummerSalesBit($summerSalesBit)
    {
        $this->summerSalesBit = $summerSalesBit;

        return $this;
    }

    /**
     * Get summerSalesBit
     *
     * @return boolean 
     */
    public function getSummerSalesBit()
    {
        return $this->summerSalesBit;
    }

    /**
     * Set fulltimeSalesBit
     *
     * @param boolean $fulltimeSalesBit
     * @return SoldLocationBackup
     */
    public function setFulltimeSalesBit($fulltimeSalesBit)
    {
        $this->fulltimeSalesBit = $fulltimeSalesBit;

        return $this;
    }

    /**
     * Get fulltimeSalesBit
     *
     * @return boolean 
     */
    public function getFulltimeSalesBit()
    {
        return $this->fulltimeSalesBit;
    }

    /**
     * Set insideSalesBit
     *
     * @param boolean $insideSalesBit
     * @return SoldLocationBackup
     */
    public function setInsideSalesBit($insideSalesBit)
    {
        $this->insideSalesBit = $insideSalesBit;

        return $this;
    }

    /**
     * Get insideSalesBit
     *
     * @return boolean 
     */
    public function getInsideSalesBit()
    {
        return $this->insideSalesBit;
    }

    /**
     * Set sortOrder
     *
     * @param boolean $sortOrder
     * @return SoldLocationBackup
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
     * @return SoldLocationBackup
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
     * @return SoldLocationBackup
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
     * @return SoldLocationBackup
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
     * @return SoldLocationBackup
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
     * @return SoldLocationBackup
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
     * Get soldLocation
     *
     * @return string 
     */
    public function getSoldLocation()
    {
        return $this->soldLocation;
    }
}
