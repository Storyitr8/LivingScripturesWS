<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesRecord
 *
 * @ORM\Table(name="sales_record", indexes={@ORM\Index(name="FK__sales_rec__sales__11BF94B6", columns={"sales_record_type"}), @ORM\Index(name="FK__sales_rec__recor__12B3B8EF", columns={"record_holder_user_role"}), @ORM\Index(name="fk_salesrecord_salesprogramtype", columns={"sales_program_type"})})
 * @ORM\Entity
 */
class SalesRecord
{
    /**
     * @var integer
     *
     * @ORM\Column(name="record_year", type="integer", nullable=false)
     */
    private $recordYear;

    /**
     * @var string
     *
     * @ORM\Column(name="record_holder_name", type="string", length=100, nullable=false)
     */
    private $recordHolderName;

    /**
     * @var string
     *
     * @ORM\Column(name="record_value", type="decimal", precision=7, scale=2, nullable=false)
     */
    private $recordValue;

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
     * @ORM\Column(name="sales_record_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesRecordId;

    /**
     * @var \LSI\SystemBundle\Entity\SalesProgramType
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\SalesProgramType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_program_type", referencedColumnName="sales_program_type")
     * })
     */
    private $salesProgramType;

    /**
     * @var \LSI\SystemBundle\Entity\UserRole
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="record_holder_user_role", referencedColumnName="user_role")
     * })
     */
    private $recordHolderUserRole;

    /**
     * @var \LSI\SystemBundle\Entity\SalesRecordType
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\SalesRecordType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_record_type", referencedColumnName="sales_record_type")
     * })
     */
    private $salesRecordType;



    /**
     * Set recordYear
     *
     * @param integer $recordYear
     * @return SalesRecord
     */
    public function setRecordYear($recordYear)
    {
        $this->recordYear = $recordYear;

        return $this;
    }

    /**
     * Get recordYear
     *
     * @return integer 
     */
    public function getRecordYear()
    {
        return $this->recordYear;
    }

    /**
     * Set recordHolderName
     *
     * @param string $recordHolderName
     * @return SalesRecord
     */
    public function setRecordHolderName($recordHolderName)
    {
        $this->recordHolderName = $recordHolderName;

        return $this;
    }

    /**
     * Get recordHolderName
     *
     * @return string 
     */
    public function getRecordHolderName()
    {
        return $this->recordHolderName;
    }

    /**
     * Set recordValue
     *
     * @param string $recordValue
     * @return SalesRecord
     */
    public function setRecordValue($recordValue)
    {
        $this->recordValue = $recordValue;

        return $this;
    }

    /**
     * Get recordValue
     *
     * @return string 
     */
    public function getRecordValue()
    {
        return $this->recordValue;
    }

    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return SalesRecord
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
     * @return SalesRecord
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
     * @return SalesRecord
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
     * @return SalesRecord
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
     * @return SalesRecord
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
     * Get salesRecordId
     *
     * @return integer 
     */
    public function getSalesRecordId()
    {
        return $this->salesRecordId;
    }

    /**
     * Set salesProgramType
     *
     * @param \LSI\SystemBundle\Entity\SalesProgramType $salesProgramType
     * @return SalesRecord
     */
    public function setSalesProgramType(\LSI\SystemBundle\Entity\SalesProgramType $salesProgramType = null)
    {
        $this->salesProgramType = $salesProgramType;

        return $this;
    }

    /**
     * Get salesProgramType
     *
     * @return \LSI\SystemBundle\Entity\SalesProgramType 
     */
    public function getSalesProgramType()
    {
        return $this->salesProgramType;
    }

    /**
     * Set recordHolderUserRole
     *
     * @param \LSI\SystemBundle\Entity\UserRole $recordHolderUserRole
     * @return SalesRecord
     */
    public function setRecordHolderUserRole(\LSI\SystemBundle\Entity\UserRole $recordHolderUserRole = null)
    {
        $this->recordHolderUserRole = $recordHolderUserRole;

        return $this;
    }

    /**
     * Get recordHolderUserRole
     *
     * @return \LSI\SystemBundle\Entity\UserRole 
     */
    public function getRecordHolderUserRole()
    {
        return $this->recordHolderUserRole;
    }

    /**
     * Set salesRecordType
     *
     * @param \LSI\SystemBundle\Entity\SalesRecordType $salesRecordType
     * @return SalesRecord
     */
    public function setSalesRecordType(\LSI\SystemBundle\Entity\SalesRecordType $salesRecordType = null)
    {
        $this->salesRecordType = $salesRecordType;

        return $this;
    }

    /**
     * Get salesRecordType
     *
     * @return \LSI\SystemBundle\Entity\SalesRecordType 
     */
    public function getSalesRecordType()
    {
        return $this->salesRecordType;
    }
}
