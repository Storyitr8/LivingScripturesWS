<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonusPointSchedTotals
 *
 * @ORM\Table(name="bonus_point_sched_totals")
 * @ORM\Entity
 */
class BonusPointSchedTotals
{
    /**
     * @var string
     *
     * @ORM\Column(name="min_value", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $minValue;

    /**
     * @var string
     *
     * @ORM\Column(name="cash_points", type="decimal", precision=10, scale=1, nullable=false)
     */
    private $cashPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="other_points", type="decimal", precision=10, scale=1, nullable=false)
     */
    private $otherPoints;

    /**
     * @var string
     *
     * @ORM\Column(name="sales_program_type", type="string", length=3, nullable=false)
     */
    private $salesProgramType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set minValue
     *
     * @param string $minValue
     * @return BonusPointSchedTotals
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * Get minValue
     *
     * @return string 
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * Set cashPoints
     *
     * @param string $cashPoints
     * @return BonusPointSchedTotals
     */
    public function setCashPoints($cashPoints)
    {
        $this->cashPoints = $cashPoints;

        return $this;
    }

    /**
     * Get cashPoints
     *
     * @return string 
     */
    public function getCashPoints()
    {
        return $this->cashPoints;
    }

    /**
     * Set otherPoints
     *
     * @param string $otherPoints
     * @return BonusPointSchedTotals
     */
    public function setOtherPoints($otherPoints)
    {
        $this->otherPoints = $otherPoints;

        return $this;
    }

    /**
     * Get otherPoints
     *
     * @return string 
     */
    public function getOtherPoints()
    {
        return $this->otherPoints;
    }

    /**
     * Set salesProgramType
     *
     * @param string $salesProgramType
     * @return BonusPointSchedTotals
     */
    public function setSalesProgramType($salesProgramType)
    {
        $this->salesProgramType = $salesProgramType;

        return $this;
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

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
