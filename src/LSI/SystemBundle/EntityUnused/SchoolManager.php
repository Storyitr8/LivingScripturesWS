<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SchoolManager
 *
 * @ORM\Table(name="school_manager", indexes={@ORM\Index(name="FK__school_ma__schoo__4B2D1C3C", columns={"school_id"}), @ORM\Index(name="IDX_680B1721F65A601B", columns={"school_manager_userid"})})
 * @ORM\Entity
 */
class SchoolManager
{
    /**
     * @var integer
     *
     * @ORM\Column(name="sale_year", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $saleYear;

    /**
     * @var \LSI\SystemBundle\Entity\School
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="LSI\SystemBundle\Entity\School")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     * })
     */
    private $school;

    /**
     * @var \LSI\SystemBundle\Entity\UserMain
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="LSI\SystemBundle\Entity\UserMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="school_manager_userid", referencedColumnName="userid")
     * })
     */
    private $schoolManagerUserid;



    /**
     * Set saleYear
     *
     * @param integer $saleYear
     * @return SchoolManager
     */
    public function setSaleYear($saleYear)
    {
        $this->saleYear = $saleYear;

        return $this;
    }

    /**
     * Get saleYear
     *
     * @return integer 
     */
    public function getSaleYear()
    {
        return $this->saleYear;
    }

    /**
     * Set school
     *
     * @param \LSI\SystemBundle\Entity\School $school
     * @return SchoolManager
     */
    public function setSchool(\LSI\SystemBundle\Entity\School $school)
    {
        $this->school = $school;

        return $this;
    }

    /**
     * Get school
     *
     * @return \LSI\SystemBundle\Entity\School 
     */
    public function getSchool()
    {
        return $this->school;
    }

    /**
     * Set schoolManagerUserid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $schoolManagerUserid
     * @return SchoolManager
     */
    public function setSchoolManagerUserid(\LSI\SystemBundle\Entity\UserMain $schoolManagerUserid)
    {
        $this->schoolManagerUserid = $schoolManagerUserid;

        return $this;
    }

    /**
     * Get schoolManagerUserid
     *
     * @return \LSI\SystemBundle\Entity\UserMain 
     */
    public function getSchoolManagerUserid()
    {
        return $this->schoolManagerUserid;
    }
}
