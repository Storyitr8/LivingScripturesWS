<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Bonus
 *
 ** @ORM\Table(name="bonus")
 ** @ORM\Entity
 */
class Bonus
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="bonus_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $bonusId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="bonus_code", type="string", length=3, nullable=false)
     */
    private $bonusCode;

    /**
     *** @var string
     *
     ** @ORM\Column(name="bonus_desc", type="string", length=60, nullable=false)
     */
    private $bonusDesc;

    /**
     *** @var string
     *
     ** @ORM\Column(name="bonus_csv_desc", type="string", length=120, nullable=true)
     */
    private $bonusCsvDesc;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="non_lds", type="boolean", nullable=false)
     */
    private $nonLds;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="retail_value", type="integer", nullable=false)
     */
    private $retailValue;

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
     *** @var \ProductType
     *
     ** @ORM\ManyToOne(targetEntity="ProductType")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="product_type", referencedColumnName="product_type")
     * })
     */
    private $productType;


    /**
     * Get bonusId
     *
     ** @return integer
     */
    public function getBonusId()
    {
        return $this->bonusId;
    }

    /**
     * Set bonusCode
     *
     ** @param string $bonusCode
     ** @return Bonus
     */
    public function setBonusCode($bonusCode)
    {
        $this->bonusCode = $bonusCode;

        return $this;
    }

    /**
     * Get bonusCode
     *
     ** @return string
     */
    public function getBonusCode()
    {
        return $this->bonusCode;
    }

    /**
     * Set bonusDesc
     *
     ** @param string $bonusDesc
     ** @return Bonus
     */
    public function setBonusDesc($bonusDesc)
    {
        $this->bonusDesc = $bonusDesc;

        return $this;
    }

    /**
     * Get bonusDesc
     *
     ** @return string
     */
    public function getBonusDesc()
    {
        return $this->bonusDesc;
    }

    /**
     * Set bonusCsvDesc
     *
     ** @param string $bonusCsvDesc
     ** @return Bonus
     */
    public function setBonusCsvDesc($bonusCsvDesc)
    {
        $this->bonusCsvDesc = $bonusCsvDesc;

        return $this;
    }

    /**
     * Get bonusCsvDesc
     *
     ** @return string
     */
    public function getBonusCsvDesc()
    {
        return $this->bonusCsvDesc;
    }

    /**
     * Set nonLds
     *
     ** @param boolean $nonLds
     ** @return Bonus
     */
    public function setNonLds($nonLds)
    {
        $this->nonLds = $nonLds;

        return $this;
    }

    /**
     * Get nonLds
     *
     ** @return boolean
     */
    public function getNonLds()
    {
        return $this->nonLds;
    }

    /**
     * Set retailValue
     *
     ** @param integer $retailValue
     ** @return Bonus
     */
    public function setRetailValue($retailValue)
    {
        $this->retailValue = $retailValue;

        return $this;
    }

    /**
     * Get retailValue
     *
     ** @return integer
     */
    public function getRetailValue()
    {
        return $this->retailValue;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return Bonus
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
     ** @return Bonus
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
     ** @return Bonus
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
     ** @return Bonus
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
     ** @return Bonus
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

    /**
     * Set productType
     *
     ** @param \ProductType $productType
     ** @return Bonus
     */
    public function setProductType(\LSI\SystemBundle\Entity\ProductType $productType = null)
    {
        $this->productType = $productType;

        return $this;
    }

    /**
     * Get productType
     *
     ** @return \ProductType
     */
    public function getProductType()
    {
        return $this->productType;
    }
}
