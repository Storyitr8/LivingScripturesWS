<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolManager
 *
 ** @ORM\Table(name="school_manager")
 ** @ORM\Entity
 */
class SchoolManager
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="sale_year", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="NONE")
     */
    private $saleYear;

    /**
     *** @var \UserMain
     *
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="NONE")
     ** @ORM\OneToOne(targetEntity="UserMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="school_manager_userid", referencedColumnName="userid")
     * })
     */
    private $schoolManagerUserid;

    /**
     *** @var \School
     *
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="NONE")
     ** @ORM\OneToOne(targetEntity="School")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     * })
     */
    private $school;


    /**
     * Set saleYear
     *
     ** @param integer $saleYear
     ** @return SchoolManager
     */
    public function setSaleYear($saleYear)
    {
        $this->saleYear = $saleYear;

        return $this;
    }

    /**
     * Get saleYear
     *
     ** @return integer
     */
    public function getSaleYear()
    {
        return $this->saleYear;
    }

    /**
     * Set schoolManagerUserid
     *
     ** @param \UserMain $schoolManagerUserid
     ** @return SchoolManager
     */
    public function setSchoolManagerUserid(\LSI\SystemBundle\Entity\UserMain $schoolManagerUserid)
    {
        $this->schoolManagerUserid = $schoolManagerUserid;

        return $this;
    }

    /**
     * Get schoolManagerUserid
     *
     ** @return \UserMain
     */
    public function getSchoolManagerUserid()
    {
        return $this->schoolManagerUserid;
    }

    /**
     * Set school
     *
     ** @param \School $school
     ** @return SchoolManager
     */
    public function setSchool(\LSI\SystemBundle\Entity\School $school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     ** @return \School
     */
    public function getSchool()
    {
        return $this->school;
    }
}
