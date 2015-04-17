<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductLevels
 *
 ** @ORM\Table(name="product_levels")
 ** @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ProductLevelsRepository")
 */
class ProductLevels
{
    /**
     *** @var integer
     *
     ** @ORM\OneToOne(targetEntity="ProductMain")
     ** @ORM\JoinColumn(name="product_main_id", referencedColumnName="product_main_id")
     */
    private $productMainId;

    /**
     *** @var \ProductLevels
     *
     ** @ORM\Column(name="id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Set productMainId
     *
     ** @param integer $productMainId
     ** @return ProductLevels
     */
    public function setProductMainId($productMainId)
    {
        $this->productMainId = $productMainId;

        return $this;
    }

    /**
     * Get productMainId
     *
     ** @return integer
     */
    public function getProductMainId()
    {
        return $this->productMainId;
    }

    /**
     * Set id
     *
     ** @param \ProductLevels $id
     ** @return ProductLevels
     */
    public function setId(\LSI\SystemBundle\Entity\ProductLevels $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     ** @return \ProductLevels
     */
    public function getId()
    {
        return $this->id;
    }
}
