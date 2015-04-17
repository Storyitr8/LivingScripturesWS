<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportedReportChecks
 *
 ** @ORM\Table(name="imported_report_checks")
 ** @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ImportedReportChecksRepository")
 */
class ImportedReportChecks
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
     ** @ORM\Column(name="`group`", type="string", length=50, nullable=true)
     */
    private $group;

    /**
     *** @var string
     *
     ** @ORM\Column(name="team", type="string", length=50, nullable=true)
     */
    private $team;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="`slsm-no`", type="integer", nullable=true)
     */
    private $slsmNo;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="`date`", type="date", nullable=true)
     */
    private $date;

    /**
     *** @var float
     *
     ** @ORM\Column(name="`amount`", type="decimal", precision=10, scale=4, nullable=true)
     */
    private $amount;


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
     * Set group
     *
     ** @param string $group
     ** @return ImportedReportChecks
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     ** @return string
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Set team
     *
     ** @param string $team
     ** @return ImportedReportChecks
     */
    public function setTeam($team)
    {
        $this->team = $team;

        return $this;
    }

    /**
     * Get team
     *
     ** @return string
     */
    public function getTeam()
    {
        return $this->team;
    }

    /**
     * Set slsmNo
     *
     ** @param integer $slsmNo
     ** @return ImportedReportChecks
     */
    public function setSlsmNo($slsmNo)
    {
        if(is_string($slsmNo)){
            $slsmNo = intval($slsmNo);
        }
        $this->slsmNo = $slsmNo;

        return $this;
    }

    /**
     * Get slsmNo
     *
     ** @return integer
     */
    public function getSlsmNo()
    {
        return $this->slsmNo;
    }

    /**
     * Set date
     *
     ** @param \DateTime $date
     ** @return ImportedReportChecks
     */
    public function setDate($date)
    {
        if(is_string($date)){
            $date = new \DateTime($date);
        }
        $this->date = $date;
        return $this;
    }

    /**
     * Get date
     *
     ** @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set amount
     *
     ** @param float $amount
     ** @return ImportedReportChecks
     */
    public function setAmount($amount)
    {
        if(is_string($amount)){
            $amount = floatval($amount);
        }
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     ** @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
