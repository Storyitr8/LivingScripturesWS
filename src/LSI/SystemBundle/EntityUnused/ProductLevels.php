<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductLevels
 *
 * @ORM\Table(name="product_levels")
 * @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ProductLevelsRepository")
 */
class ProductLevels
{
    /**
     * @var integer
     *
     * @ORM\Column(name="product_main_id", type="integer", nullable=false)
     */
    private $productMainId;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set productMainId
     *
     * @param integer $productMainId
     * @return ProductLevels
     */
    public function setProductMainId($productMainId)
    {
        $this->productMainId = $productMainId;

        return $this;
    }

    /**
     * Get productMainId
     *
     * @return integer 
     */
    public function getProductMainId()
    {
        return $this->productMainId;
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
