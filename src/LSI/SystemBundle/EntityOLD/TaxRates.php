<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * TaxRates
 *
 ** @ORM\Entity
 ** @ORM\Table(name="tax_rates")
 */
class TaxRates
{
    /**
     *** @var string
     *
     ** @ORM\Column(name="zipcode", type="string", length=5, nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $zipcode;

    /**
     *** @var float
     *
     ** @ORM\Column(name="tax_rate", type="decimal", precision=5, scale=4, nullable=true)
     */
    private $taxRate;

    public function __toString()
    {
        return (string) $this->taxRate;
    }

    /**
     * Get zipcode
     *
     ** @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * Set taxRate
     *
     ** @param float $taxRate
     ** @return TaxRates
     */
    public function setTaxRate($taxRate)
    {
        $this->taxRate = $taxRate;

        return $this;
    }

    /**
     * Get taxRate
     *
     ** @return float
     */
    public function getTaxRate()
    {
        return $this->taxRate;
    }
}
