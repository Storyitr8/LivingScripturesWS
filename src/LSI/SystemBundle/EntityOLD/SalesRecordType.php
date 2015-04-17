<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesRecordType
 *
 ** @ORM\Table(name="sales_record_type")
 ** @ORM\Entity
 */
class SalesRecordType
{
    /**
     *** @var string
     *
     ** @ORM\Column(name="sales_record_type", type="string", length=2, nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesRecordType;

    /**
     *** @var string
     *
     ** @ORM\Column(name="sales_record_type_desc", type="string", length=60, nullable=false)
     */
    private $salesRecordTypeDesc;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="sort_order", type="smallint", nullable=false)
     */
    private $sortOrder;

    /**
     *** @var string
     *
     ** @ORM\Column(name="active_status", type="string", length=1, nullable=false)
     */
    private $activeStatus;

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
     * Get salesRecordType
     *
     ** @return string
     */
    public function getSalesRecordType()
    {
        return $this->salesRecordType;
    }

    /**
     * Set salesRecordTypeDesc
     *
     ** @param string $salesRecordTypeDesc
     ** @return SalesRecordType
     */
    public function setSalesRecordTypeDesc($salesRecordTypeDesc)
    {
        $this->salesRecordTypeDesc = $salesRecordTypeDesc;

        return $this;
    }

    /**
     * Get salesRecordTypeDesc
     *
     ** @return string
     */
    public function getSalesRecordTypeDesc()
    {
        return $this->salesRecordTypeDesc;
    }

    /**
     * Set sortOrder
     *
     ** @param integer $sortOrder
     ** @return SalesRecordType
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     ** @return integer
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return SalesRecordType
     */
    public function setActiveStatus($activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }

    /**
     * Get activeStatus
     *
     ** @return string
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return SalesRecordType
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
     ** @return SalesRecordType
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
     ** @return SalesRecordType
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
     ** @return SalesRecordType
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
}
