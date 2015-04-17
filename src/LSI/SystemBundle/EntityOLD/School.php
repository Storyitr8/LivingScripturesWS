<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * School
 *
 ** @ORM\Table(name="school")
 ** @ORM\Entity
 */
class School
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="school_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $schoolId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="school_abbr", type="string", length=10, nullable=false)
     */
    private $schoolAbbr;

    /**
     *** @var string
     *
     ** @ORM\Column(name="school_desc", type="string", length=50, nullable=false)
     */
    private $schoolDesc;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="school_manager_userid", type="integer", nullable=true)
     */
    private $schoolManagerUserid;

    /**
     *** @var string
     *
     ** @ORM\Column(name="active_status", type="string", length=1, nullable=true)
     */
    private $activeStatus;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="create_userid", type="integer", nullable=false)
     */
    private $createUserid;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="update_date", type="date", nullable=false)
     */
    private $updateDate;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="update_userid", type="integer", nullable=false)
     */
    private $updateUserid;


    /**
     * Get schoolId
     *
     ** @return integer
     */
    public function getSchoolId()
    {
        return $this->schoolId;
    }

    /**
     * Set schoolAbbr
     *
     ** @param string $schoolAbbr
     ** @return School
     */
    public function setSchoolAbbr($schoolAbbr)
    {
        $this->schoolAbbr = $schoolAbbr;

        return $this;
    }

    /**
     * Get schoolAbbr
     *
     ** @return string
     */
    public function getSchoolAbbr()
    {
        return $this->schoolAbbr;
    }

    /**
     * Set schoolDesc
     *
     ** @param string $schoolDesc
     ** @return School
     */
    public function setSchoolDesc($schoolDesc)
    {
        $this->schoolDesc = $schoolDesc;

        return $this;
    }

    /**
     * Get schoolDesc
     *
     ** @return string
     */
    public function getSchoolDesc()
    {
        return $this->schoolDesc;
    }

    /**
     * Set schoolManagerUserid
     *
     ** @param integer $schoolManagerUserid
     ** @return School
     */
    public function setSchoolManagerUserid($schoolManagerUserid)
    {
        $this->schoolManagerUserid = $schoolManagerUserid;

        return $this;
    }

    /**
     * Get schoolManagerUserid
     *
     ** @return integer
     */
    public function getSchoolManagerUserid()
    {
        return $this->schoolManagerUserid;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return School
     */
    public function setActiveStatus($activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }

    /**
     * Get activeStatus
     *
     ** @return string
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return School
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     ** @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set createUserid
     *
     ** @param integer $createUserid
     ** @return School
     */
    public function setCreateUserid($createUserid)
    {
        $this->createUserid = $createUserid;

        return $this;
    }

    /**
     * Get createUserid
     *
     ** @return integer
     */
    public function getCreateUserid()
    {
        return $this->createUserid;
    }

    /**
     * Set updateDate
     *
     ** @param \DateTime $updateDate
     ** @return School
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     ** @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateUserid
     *
     ** @param integer $updateUserid
     ** @return School
     */
    public function setUpdateUserid($updateUserid)
    {
        $this->updateUserid = $updateUserid;

        return $this;
    }

    /**
     * Get updateUserid
     *
     ** @return integer
     */
    public function getUpdateUserid()
    {
        return $this->updateUserid;
    }
}
