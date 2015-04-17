<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalesProgramType
 *
 * @ORM\Table(name="sales_program_type")
 * @ORM\Entity
 */
class SalesProgramType
{
    /**
     * @var string
     *
     * @ORM\Column(name="sales_program_type_desc", type="string", length=60, nullable=false)
     */
    private $salesProgramTypeDesc;

    /**
     * @var string
     *
     * @ORM\Column(name="active_status", type="string", length=1, nullable=false)
     */
    private $activeStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="bonus_schedule", type="string", length=10, nullable=false)
     */
    private $bonusSchedule;

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
     * @ORM\Column(name="sales_program_type", type="string", length=2)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $salesProgramType;



    /**
     * Set salesProgramTypeDesc
     *
     * @param string $salesProgramTypeDesc
     * @return SalesProgramType
     */
    public function setSalesProgramTypeDesc($salesProgramTypeDesc)
    {
        $this->salesProgramTypeDesc = $salesProgramTypeDesc;

        return $this;
    }

    /**
     * Get salesProgramTypeDesc
     *
     * @return string 
     */
    public function getSalesProgramTypeDesc()
    {
        return $this->salesProgramTypeDesc;
    }

    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return SalesProgramType
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
     * Set bonusSchedule
     *
     * @param string $bonusSchedule
     * @return SalesProgramType
     */
    public function setBonusSchedule($bonusSchedule)
    {
        $this->bonusSchedule = $bonusSchedule;

        return $this;
    }

    /**
     * Get bonusSchedule
     *
     * @return string 
     */
    public function getBonusSchedule()
    {
        return $this->bonusSchedule;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return SalesProgramType
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
     * @return SalesProgramType
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
     * @return SalesProgramType
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
     * @return SalesProgramType
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
     * Get salesProgramType
     *
     * @return string 
     */
    public function getSalesProgramType()
    {
        return $this->salesProgramType;
    }
}
