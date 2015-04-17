<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SummerSalesWeek
 *
 * @ORM\Table(name="summer_sales_week", indexes={@ORM\Index(name="fk_summersalesweek_salesprogramtype", columns={"sales_program_type"})})
 * @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\SummerSalesWeekRepository")
 */
class SummerSalesWeek
{
    /**
     * @var string
     *
     * @ORM\Column(name="summer_sales_week_desc", type="string", length=50, nullable=false)
     */
    private $summerSalesWeekDesc;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="summer_sales_week_start_date", type="date", nullable=false)
     */
    private $summerSalesWeekStartDate;

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
     * @ORM\Column(name="summer_sales_week_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $summerSalesWeekId;

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
     * Set summerSalesWeekDesc
     *
     * @param string $summerSalesWeekDesc
     * @return SummerSalesWeek
     */
    public function setSummerSalesWeekDesc($summerSalesWeekDesc)
    {
        $this->summerSalesWeekDesc = $summerSalesWeekDesc;

        return $this;
    }

    /**
     * Get summerSalesWeekDesc
     *
     * @return string 
     */
    public function getSummerSalesWeekDesc()
    {
        return $this->summerSalesWeekDesc;
    }

    /**
     * Set summerSalesWeekStartDate
     *
     * @param \DateTime $summerSalesWeekStartDate
     * @return SummerSalesWeek
     */
    public function setSummerSalesWeekStartDate($summerSalesWeekStartDate)
    {
        $this->summerSalesWeekStartDate = $summerSalesWeekStartDate;

        return $this;
    }

    /**
     * Get summerSalesWeekStartDate
     *
     * @return \DateTime 
     */
    public function getSummerSalesWeekStartDate()
    {
        return $this->summerSalesWeekStartDate;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return SummerSalesWeek
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
     * @return SummerSalesWeek
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
     * @return SummerSalesWeek
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
     * @return SummerSalesWeek
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
     * Get summerSalesWeekId
     *
     * @return integer 
     */
    public function getSummerSalesWeekId()
    {
        return $this->summerSalesWeekId;
    }

    /**
     * Set salesProgramType
     *
     * @param \LSI\SystemBundle\Entity\SalesProgramType $salesProgramType
     * @return SummerSalesWeek
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
}
