<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BonusPointSchedDvds
 *
 * @ORM\Table(name="bonus_point_sched_dvds")
 * @ORM\Entity
 */
class BonusPointSchedDvds
{
    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=10, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="value", type="integer", nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="points", type="decimal", precision=10, scale=1, nullable=false)
     */
    private $points;

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
     * Set type
     *
     * @param string $type
     * @return BonusPointSchedDvds
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set value
     *
     * @param integer $value
     * @return BonusPointSchedDvds
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set points
     *
     * @param string $points
     * @return BonusPointSchedDvds
     */
    public function setPoints($points)
    {
        $this->points = $points;

        return $this;
    }

    /**
     * Get points
     *
     * @return string 
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * Set salesProgramType
     *
     * @param string $salesProgramType
     * @return BonusPointSchedDvds
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
