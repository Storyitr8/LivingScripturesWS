<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sysdiagrams
 *
 * @ORM\Table(name="sysdiagrams", uniqueConstraints={@ORM\UniqueConstraint(name="UK_principal_name", columns={"principal_id", "name"})})
 * @ORM\Entity
 */
class Sysdiagrams
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=160, nullable=false)
     */
    private $name;

    /**
     * @var integer
     *
     * @ORM\Column(name="principal_id", type="integer", nullable=false)
     */
    private $principalId;

    /**
     * @var integer
     *
     * @ORM\Column(name="version", type="integer", nullable=true)
     */
    private $version;

    /**
     * @var string
     *
     * @ORM\Column(name="definition", type="blob", nullable=true)
     */
    private $definition;

    /**
     * @var integer
     *
     * @ORM\Column(name="diagram_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $diagramId;



    /**
     * Set name
     *
     * @param string $name
     * @return Sysdiagrams
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set principalId
     *
     * @param integer $principalId
     * @return Sysdiagrams
     */
    public function setPrincipalId($principalId)
    {
        $this->principalId = $principalId;

        return $this;
    }

    /**
     * Get principalId
     *
     * @return integer 
     */
    public function getPrincipalId()
    {
        return $this->principalId;
    }

    /**
     * Set version
     *
     * @param integer $version
     * @return Sysdiagrams
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return integer 
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set definition
     *
     * @param string $definition
     * @return Sysdiagrams
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;

        return $this;
    }

    /**
     * Get definition
     *
     * @return string 
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * Get diagramId
     *
     * @return integer 
     */
    public function getDiagramId()
    {
        return $this->diagramId;
    }
}
