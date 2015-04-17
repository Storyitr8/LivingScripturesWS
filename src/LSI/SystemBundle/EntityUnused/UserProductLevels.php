<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserProductLevels
 *
 * @ORM\Table(name="user_product_levels")
 * @ORM\Entity
 */
class UserProductLevels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_main_id", type="integer", nullable=false)
     */
    private $userMainId;

    /**
     * @var integer
     *
     * @ORM\Column(name="product_levels_id", type="integer", nullable=false)
     */
    private $productLevelsId;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var integer
     *
     * @ORM\Column(name="order_main_id", type="integer", nullable=true)
     */
    private $orderMainId;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=300, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set userMainId
     *
     * @param integer $userMainId
     * @return UserProductLevels
     */
    public function setUserMainId($userMainId)
    {
        $this->userMainId = $userMainId;

        return $this;
    }

    /**
     * Get userMainId
     *
     * @return integer 
     */
    public function getUserMainId()
    {
        return $this->userMainId;
    }

    /**
     * Set productLevelsId
     *
     * @param integer $productLevelsId
     * @return UserProductLevels
     */
    public function setProductLevelsId($productLevelsId)
    {
        $this->productLevelsId = $productLevelsId;

        return $this;
    }

    /**
     * Get productLevelsId
     *
     * @return integer 
     */
    public function getProductLevelsId()
    {
        return $this->productLevelsId;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return UserProductLevels
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return UserProductLevels
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set orderMainId
     *
     * @param integer $orderMainId
     * @return UserProductLevels
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
     * Set description
     *
     * @param string $description
     * @return UserProductLevels
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
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
