<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ShipType
 *
 * @ORM\Table(name="ship_type")
 * @ORM\Entity
 */
class ShipType
{
    /**
     * @var string
     *
     * @ORM\Column(name="ship_type_desc", type="string", length=60, nullable=false)
     */
    private $shipTypeDesc;

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
     * @ORM\Column(name="ship_type", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $shipType;



    /**
     * Set shipTypeDesc
     *
     * @param string $shipTypeDesc
     * @return ShipType
     */
    public function setShipTypeDesc($shipTypeDesc)
    {
        $this->shipTypeDesc = $shipTypeDesc;

        return $this;
    }

    /**
     * Get shipTypeDesc
     *
     * @return string 
     */
    public function getShipTypeDesc()
    {
        return $this->shipTypeDesc;
    }

    /**
     * Set sortOrder
     *
     * @param boolean $sortOrder
     * @return ShipType
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
     * @return ShipType
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
     * @return ShipType
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
     * @return ShipType
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
     * @return ShipType
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
     * @return ShipType
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
     * Get shipType
     *
     * @return string 
     */
    public function getShipType()
    {
        return $this->shipType;
    }
}
