<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * BonusAdminSettings
 *
 ** @ORM\Table(name="bonus_admin_settings")
 ** @ORM\Entity
 */
class BonusAdminSettings
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
     ** @ORM\Column(name="name", type="string", length=50, nullable=true)
     */
    private $name;

    /**
     *** @var string
     *
     ** @ORM\Column(name="key", type="string", length=25, nullable=false)
     */
    private $key;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="value", type="smallint", nullable=false)
     */
    private $value;

    /**
     *** @var string
     *
     ** @ORM\Column(name="sales_program_type", type="string", length=5, nullable=false)
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
     * Set name
     *
     ** @param string $name
     ** @return BonusAdminSettings
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
     * Set key
     *
     ** @param string $key
     ** @return BonusAdminSettings
     */
    public function setKey($key)
    {
        $this->key = $key;

        return $this;
    }

    /**
     * Get key
     *
     ** @return string
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * Set value
     *
     ** @param integer $value
     ** @return BonusAdminSettings
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     ** @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set salesProgramType
     *
     ** @param string $salesProgramType
     ** @return BonusAdminSettings
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
