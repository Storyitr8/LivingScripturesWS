<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PromoCodes
 *
 ** @ORM\Table(name="promo_codes")
 ** @ORM\Entity
 */
class PromoCodes
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     *** @var string
     *
     ** @ORM\Column(name="promo_code", type="string", length=20, nullable=false)
     */
    private $promoCode;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="is_percent", type="smallint", nullable=false)
     */
    private $isPercent;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="is_dollars_off", type="smallint", nullable=false)
     */
    private $isDollarsOff;

    /**
     *** @var float
     *
     ** @ORM\Column(name="amount", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $amount;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="is_default", type="smallint", nullable=false)
     */
    private $isDefault;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="required_product_main_id", type="integer", nullable=true)
     */
    private $requiredProductMainId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="free_product_main_id", type="integer", nullable=true)
     */
    private $freeProductMainId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="max_discount_series", type="integer", nullable=false)
     */
    private $maxDiscountSeries;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="allow_bonuses", type="integer", nullable=false)
     */
    private $allowBonuses;


    /**
     * Get id
     *
     ** @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set promoCode
     *
     ** @param string $promoCode
     ** @return PromoCodes
     */
    public function setPromoCode($promoCode)
    {
        $this->promoCode = $promoCode;

        return $this;
    }

    /**
     * Get promoCode
     *
     ** @return string
     */
    public function getPromoCode()
    {
        return $this->promoCode;
    }

    /**
     * Set isPercent
     *
     ** @param integer $isPercent
     ** @return PromoCodes
     */
    public function setIsPercent($isPercent)
    {
        $this->isPercent = $isPercent;

        return $this;
    }

    /**
     * Get isPercent
     *
     ** @return integer
     */
    public function getIsPercent()
    {
        return $this->isPercent;
    }

    /**
     * Set isDollarsOff
     *
     ** @param integer $isDollarsOff
     ** @return PromoCodes
     */
    public function setIsDollarsOff($isDollarsOff)
    {
        $this->isDollarsOff = $isDollarsOff;

        return $this;
    }

    /**
     * Get isDollarsOff
     *
     ** @return integer
     */
    public function getIsDollarsOff()
    {
        return $this->isDollarsOff;
    }

    /**
     * Set amount
     *
     ** @param float $amount
     ** @return PromoCodes
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     ** @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set isDefault
     *
     ** @param integer $isDefault
     ** @return PromoCodes
     */
    public function setIsDefault($isDefault)
    {
        $this->isDefault = $isDefault;

        return $this;
    }

    /**
     * Get isDefault
     *
     ** @return integer
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * Set requiredProductMainId
     *
     ** @param integer $requiredProductMainId
     ** @return PromoCodes
     */
    public function setRequiredProductMainId($requiredProductMainId)
    {
        $this->requiredProductMainId = $requiredProductMainId;

        return $this;
    }

    /**
     * Get requiredProductMainId
     *
     ** @return integer
     */
    public function getRequiredProductMainId()
    {
        return $this->requiredProductMainId;
    }

    /**
     * Set freeProductMainId
     *
     ** @param integer $freeProductMainId
     ** @return PromoCodes
     */
    public function setFreeProductMainId($freeProductMainId)
    {
        $this->freeProductMainId = $freeProductMainId;

        return $this;
    }

    /**
     * Get freeProductMainId
     *
     ** @return integer
     */
    public function getFreeProductMainId()
    {
        return $this->freeProductMainId;
    }

    /**
     * Set maxDiscountSeries
     *
     ** @param integer $maxDiscountSeries
     ** @return PromoCodes
     */
    public function setMaxDiscountSeries($maxDiscountSeries)
    {
        $this->maxDiscountSeries = $maxDiscountSeries;

        return $this;
    }

    /**
     * Get maxDiscountSeries
     *
     ** @return integer
     */
    public function getMaxDiscountSeries()
    {
        return $this->maxDiscountSeries;
    }

    /**
     * Set allowBonuses
     *
     ** @param integer $allowBonuses
     ** @return PromoCodes
     */
    public function setAllowBonuses($allowBonuses)
    {
        $this->allowBonuses = $allowBonuses;

        return $this;
    }

    /**
     * Get allowBonuses
     *
     ** @return integer
     */
    public function getAllowBonuses()
    {
        return $this->allowBonuses;
    }
}
