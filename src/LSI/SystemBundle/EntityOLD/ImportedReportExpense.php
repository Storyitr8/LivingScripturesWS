<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ImportedReportExpense
 *
 ** @ORM\Table(name="imported_report_expense")
 ** @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\ImportedReportExpenseRepository")
 */
class ImportedReportExpense
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
     *** @var string
     *
     ** @ORM\Column(name="`category`", type="string", length=50, nullable=true)
     */
    private $category;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`week`", type="string", length=50, nullable=true)
     */
    private $week;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="`date`", type="date", nullable=true)
     */
    private $date;

    /**
     *** @var string
     *
     ** @ORM\Column(name="`desc`", type="string", length=50, nullable=true)
     */
    private $desc;

    /**
     *** @var string
     *
     ** @ORM\Column(name="amt", type="string", length=50, nullable=true)
     */
    private $amt;


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
     ** @return ImportedReportExpense
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
     ** @return ImportedReportExpense
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
     ** @return ImportedReportExpense
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
     * Set category
     *
     ** @param string $category
     ** @return ImportedReportExpense
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     ** @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set week
     *
     ** @param string $week
     ** @return ImportedReportExpense
     */
    public function setWeek($week)
    {
        $this->week = $week;

        return $this;
    }

    /**
     * Get week
     *
     ** @return string
     */
    public function getWeek()
    {
        return $this->week;
    }

    /**
     * Set date
     *
     ** @param \DateTime $date
     ** @return ImportedReportExpense
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
     * Set desc
     *
     ** @param string $desc
     ** @return ImportedReportExpense
     */
    public function setDesc($desc)
    {
        $this->desc = $desc;

        return $this;
    }

    /**
     * Get desc
     *
     ** @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * Set amt
     *
     ** @param string $amt
     ** @return ImportedReportExpense
     */
    public function setAmt($amt)
    {
        $this->amt = $amt;

        return $this;
    }

    /**
     * Get amt
     *
     ** @return string
     */
    public function getAmt()
    {
        return $this->amt;
    }
}
