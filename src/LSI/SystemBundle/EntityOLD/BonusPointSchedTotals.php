<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * BonusPointSchedTotals
 *
 ** @ORM\Table(name="bonus_point_sched_totals")
 ** @ORM\Entity
 */
class BonusPointSchedTotals
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
     *** @var float
     *
     ** @ORM\Column(name="min_value", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $minValue;

    /**
     *** @var float
     *
     ** @ORM\Column(name="cash_points", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $cashPoints;

    /**
     *** @var float
     *
     ** @ORM\Column(name="other_points", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $otherPoints;

    /**
     *** @var string
     *
     ** @ORM\Column(name="sales_program_type", type="string", length=3, nullable=false)
     */
    private $salesProgramType;


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
     * Set minValue
     *
     ** @param float $minValue
     ** @return BonusPointSchedTotals
     */
    public function setMinValue($minValue)
    {
        $this->minValue = $minValue;

        return $this;
    }

    /**
     * Get minValue
     *
     ** @return float
     */
    public function getMinValue()
    {
        return $this->minValue;
    }

    /**
     * Set cashPoints
     *
     ** @param float $cashPoints
     ** @return BonusPointSchedTotals
     */
    public function setCashPoints($cashPoints)
    {
        $this->cashPoints = $cashPoints;

        return $this;
    }

    /**
     * Get cashPoints
     *
     ** @return float
     */
    public function getCashPoints()
    {
        return $this->cashPoints;
    }

    /**
     * Set otherPoints
     *
     ** @param float $otherPoints
     ** @return BonusPointSchedTotals
     */
    public function setOtherPoints($otherPoints)
    {
        $this->otherPoints = $otherPoints;

        return $this;
    }

    /**
     * Get otherPoints
     *
     ** @return float
     */
    public function getOtherPoints()
    {
        return $this->otherPoints;
    }

    /**
     * Set salesProgramType
     *
     ** @param string $salesProgramType
     ** @return BonusPointSchedTotals
     */
    public function setSalesProgramType($salesProgramType)
    {
        $this->salesProgramType = $salesProgramType;

        return $this;
    }

    /**
     * Get salesProgramType
     *
     ** @return string
     */
    public function getSalesProgramType()
    {
        return $this->salesProgramType;
    }
}
