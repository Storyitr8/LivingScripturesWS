<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TaxRates
 *
 * @ORM\Table(name="tax_rates")
 * @ORM\Entity
 */
class TaxRates
{
    /**
     * @var string
     *
     * @ORM\Column(name="tax_rate", type="decimal", precision=5, scale=4, nullable=true)
     */
    private $taxRate;

    /**
     * @var string
     *
     * @ORM\Column(name="zipcode", type="string", length=5)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zipcode;



    /**
     * Set taxRate
     *
     * @param string $taxRate
     * @return TaxRates
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate
     *
     * @return string 
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }

    /**
     * Get zipcode
     *
     * @return string 
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }
}
