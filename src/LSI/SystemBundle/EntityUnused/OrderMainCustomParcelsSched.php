<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderMainCustomParcelsSched
 *
 * @ORM\Table(name="order_main_custom_parcels_sched")
 * @ORM\Entity
 */
class OrderMainCustomParcelsSched
{
    /**
     * @var integer
     *
     * @ORM\Column(name="order_main_id", type="integer", nullable=false)
     */
    private $orderMainId;

    /**
     * @var integer
     *
     * @ORM\Column(name="parcels_ship", type="integer", nullable=false)
     */
    private $parcelsShip;

    /**
     * @var integer
     *
     * @ORM\Column(name="period_num", type="integer", nullable=false)
     */
    private $periodNum;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set orderMainId
     *
     * @param integer $orderMainId
     * @return OrderMainCustomParcelsSched
     */
    public function setOrderMainId($orderMainId)
    {
        $this->orderMainId = $orderMainId;

        return $this;
    }

    /**
     * Get orderMainId
     *
     * @return integer 
     */
    public function getOrderMainId()
    {
        return $this->orderMainId;
    }

    /**
     * Set parcelsShip
     *
     * @param integer $parcelsShip
     * @return OrderMainCustomParcelsSched
     */
    public function setParcelsShip($parcelsShip)
    {
        $this->parcelsShip = $parcelsShip;

        return $this;
    }

    /**
     * Get parcelsShip
     *
     * @return integer 
     */
    public function getParcelsShip()
    {
        return $this->parcelsShip;
    }

    /**
     * Set periodNum
     *
     * @param integer $periodNum
     * @return OrderMainCustomParcelsSched
     */
    public function setPeriodNum($periodNum)
    {
        $this->periodNum = $periodNum;

        return $this;
    }

    /**
     * Get periodNum
     *
     * @return integer 
     */
    public function getPeriodNum()
    {
        return $this->periodNum;
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
