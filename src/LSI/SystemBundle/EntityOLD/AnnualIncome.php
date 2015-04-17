<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * AnnualIncome
 *
 ** @ORM\Table(name="annual_income")
 ** @ORM\Entity
 */
class AnnualIncome
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="annual_income_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $annualIncomeId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="annual_income_desc", type="string", length=60, nullable=false)
     */
    private $annualIncomeDesc;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="annual_income_translation", type="integer", nullable=false)
     */
    private $annualIncomeTranslation;

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
     * Get annualIncomeId
     *
     ** @return integer
     */
    public function getAnnualIncomeId()
    {
        return $this->annualIncomeId;
    }

    /**
     * Set annualIncomeDesc
     *
     ** @param string $annualIncomeDesc
     ** @return AnnualIncome
     */
    public function setAnnualIncomeDesc($annualIncomeDesc)
    {
        $this->annualIncomeDesc = $annualIncomeDesc;

        return $this;
    }

    /**
     * Get annualIncomeDesc
     *
     ** @return string
     */
    public function getAnnualIncomeDesc()
    {
        return $this->annualIncomeDesc;
    }

    /**
     * Set annualIncomeTranslation
     *
     ** @param integer $annualIncomeTranslation
     ** @return AnnualIncome
     */
    public function setAnnualIncomeTranslation($annualIncomeTranslation)
    {
        $this->annualIncomeTranslation = $annualIncomeTranslation;

        return $this;
    }

    /**
     * Get annualIncomeTranslation
     *
     ** @return integer
     */
    public function getAnnualIncomeTranslation()
    {
        return $this->annualIncomeTranslation;
    }

    /**
     * Set sortOrder
     *
     ** @param integer $sortOrder
     ** @return AnnualIncome
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
     ** @return AnnualIncome
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
     ** @return AnnualIncome
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
     ** @return AnnualIncome
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
     ** @return AnnualIncome
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
     ** @return AnnualIncome
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
