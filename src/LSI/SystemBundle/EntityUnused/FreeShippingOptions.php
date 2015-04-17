<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FreeShippingOptions
 *
 * @ORM\Table(name="free_shipping_options")
 * @ORM\Entity
 */
class FreeShippingOptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="dvds_gte", type="integer", nullable=false)
     */
    private $dvdsGte;

    /**
     * @var integer
     *
     * @ORM\Column(name="dvds_lte", type="integer", nullable=false)
     */
    private $dvdsLte;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcels_per_period", type="integer", nullable=false)
     */
    private $parcelsPerPeriod;

    /**
     * @var integer
     *
     * @ORM\Column(name="period", type="integer", nullable=false)
     */
    private $period;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modified", type="datetime", nullable=false)
     */
    private $dateModified;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set dvdsGte
     *
     * @param integer $dvdsGte
     * @return FreeShippingOptions
     */
    public function setDvdsGte($dvdsGte)
    {
        $this->dvdsGte = $dvdsGte;

        return $this;
    }

    /**
     * Get dvdsGte
     *
     * @return integer 
     */
    public function getDvdsGte()
    {
        return $this->dvdsGte;
    }

    /**
     * Set dvdsLte
     *
     * @param integer $dvdsLte
     * @return FreeShippingOptions
     */
    public function setDvdsLte($dvdsLte)
    {
        $this->dvdsLte = $dvdsLte;

        return $this;
    }

    /**
     * Get dvdsLte
     *
     * @return integer 
     */
    public function getDvdsLte()
    {
        return $this->dvdsLte;
    }

    /**
     * Set parcelsPerPeriod
     *
     * @param integer $parcelsPerPeriod
     * @return FreeShippingOptions
     */
    public function setParcelsPerPeriod($parcelsPerPeriod)
    {
        $this->parcelsPerPeriod = $parcelsPerPeriod;

        return $this;
    }

    /**
     * Get parcelsPerPeriod
     *
     * @return integer 
     */
    public function getParcelsPerPeriod()
    {
        return $this->parcelsPerPeriod;
    }

    /**
     * Set period
     *
     * @param integer $period
     * @return FreeShippingOptions
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * Get period
     *
     * @return integer 
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     * @return FreeShippingOptions
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime 
     */
    public function getDateModified()
    {
        return $this->dateModified;
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
