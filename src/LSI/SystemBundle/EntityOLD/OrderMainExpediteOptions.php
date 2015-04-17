<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderMainExpediteOptions
 *
 ** @ORM\Table(name="order_main_expedite_options")
 ** @ORM\Entity
 */
class OrderMainExpediteOptions
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
     ** @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     *** @var float
     *
     ** @ORM\Column(name="value", type="decimal", precision=10, scale=4, nullable=false)
     */
    private $value;


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
     * Set name
     *
     ** @param string $name
     ** @return OrderMainExpediteOptions
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     ** @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set value
     *
     ** @param float $value
     ** @return OrderMainExpediteOptions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     ** @return float
     */
    public function getValue()
    {
        return $this->value;
    }
}
