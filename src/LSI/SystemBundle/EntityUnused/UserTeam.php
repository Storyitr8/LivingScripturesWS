<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTeam
 *
 * @ORM\Table(name="user_team", indexes={@ORM\Index(name="FK__user_team__team___79E80B25", columns={"team_manager_userid"}), @ORM\Index(name="fk_userteam_salesprogramtype", columns={"sales_program_type"}), @ORM\Index(name="fk_userteam_stateprov", columns={"state_prov"})})
 * @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\UserTeamRepository")
 */
class UserTeam
{
    /**
     * @var string
     *
     * @ORM\Column(name="team_name", type="string", length=50, nullable=false)
     */
    private $teamName;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_year", type="integer", nullable=false)
     */
    private $teamYear;

    /**
     * @var string
     *
     * @ORM\Column(name="team_area", type="string", length=50, nullable=true)
     */
    private $teamArea;

    /**
     * @var string
     *
     * @ORM\Column(name="team_picture", type="string", length=255, nullable=true)
     */
    private $teamPicture;

    /**
     * @var string
     *
     * @ORM\Column(name="team_slogan", type="string", length=50, nullable=true)
     */
    private $teamSlogan;

    /**
     * @var string
     *
     * @ORM\Column(name="active_status", type="string", length=1, nullable=true)
     */
    private $activeStatus;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=true)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_userid", type="integer", nullable=true)
     */
    private $createUserid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="date", nullable=true)
     */
    private $updateDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_userid", type="integer", nullable=true)
     */
    private $updateUserid;

    /**
     * @var string
     *
     * @ORM\Column(name="team_picture_file_type", type="string", length=10, nullable=true)
     */
    private $teamPictureFileType;

    /**
     * @var integer
     *
     * @ORM\Column(name="user_team_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userTeamId;

    /**
     * @var \LSI\SystemBundle\Entity\StateProv
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\StateProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_prov", referencedColumnName="state_prov")
     * })
     */
    private $stateProv;

    /**
     * @var \LSI\SystemBundle\Entity\SalesProgramType
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\SalesProgramType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sales_program_type", referencedColumnName="sales_program_type")
     * })
     */
    private $salesProgramType;

    /**
     * @var \LSI\SystemBundle\Entity\UserMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="team_manager_userid", referencedColumnName="userid")
     * })
     */
    private $teamManagerUserid;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LSI\SystemBundle\Entity\UserMain", mappedBy="userTeam")
     */
    private $userid;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userid = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set teamName
     *
     * @param string $teamName
     * @return UserTeam
     */
    public function setTeamName($teamName)
    {
        $this->teamName = $teamName;

        return $this;
    }

    /**
     * Get teamName
     *
     * @return string 
     */
    public function getTeamName()
    {
        return $this->teamName;
    }

    /**
     * Set teamYear
     *
     * @param integer $teamYear
     * @return UserTeam
     */
    public function setTeamYear($teamYear)
    {
        $this->teamYear = $teamYear;

        return $this;
    }

    /**
     * Get teamYear
     *
     * @return integer 
     */
    public function getTeamYear()
    {
        return $this->teamYear;
    }

    /**
     * Set teamArea
     *
     * @param string $teamArea
     * @return UserTeam
     */
    public function setTeamArea($teamArea)
    {
        $this->teamArea = $teamArea;

        return $this;
    }

    /**
     * Get teamArea
     *
     * @return string 
     */
    public function getTeamArea()
    {
        return $this->teamArea;
    }

    /**
     * Set teamPicture
     *
     * @param string $teamPicture
     * @return UserTeam
     */
    public function setTeamPicture($teamPicture)
    {
        $this->teamPicture = $teamPicture;

        return $this;
    }

    /**
     * Get teamPicture
     *
     * @return string 
     */
    public function getTeamPicture()
    {
        return $this->teamPicture;
    }

    /**
     * Set teamSlogan
     *
     * @param string $teamSlogan
     * @return UserTeam
     */
    public function setTeamSlogan($teamSlogan)
    {
        $this->teamSlogan = $teamSlogan;

        return $this;
    }

    /**
     * Get teamSlogan
     *
     * @return string 
     */
    public function getTeamSlogan()
    {
        return $this->teamSlogan;
    }

    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return UserTeam
     */
    public function setActiveStatus($activeStatus)
    {
        $this->activeStatus = $activeStatus;

        return $this;
    }

    /**
     * Get activeStatus
     *
     * @return string 
     */
    public function getActiveStatus()
    {
        return $this->activeStatus;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return UserTeam
     */
    public function setCreateDate($createDate)
    {
        $this->createDate = $createDate;

        return $this;
    }

    /**
     * Get createDate
     *
     * @return \DateTime 
     */
    public function getCreateDate()
    {
        return $this->createDate;
    }

    /**
     * Set createUserid
     *
     * @param integer $createUserid
     * @return UserTeam
     */
    public function setCreateUserid($createUserid)
    {
        $this->createUserid = $createUserid;

        return $this;
    }

    /**
     * Get createUserid
     *
     * @return integer 
     */
    public function getCreateUserid()
    {
        return $this->createUserid;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     * @return UserTeam
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime 
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set updateUserid
     *
     * @param integer $updateUserid
     * @return UserTeam
     */
    public function setUpdateUserid($updateUserid)
    {
        $this->updateUserid = $updateUserid;

        return $this;
    }

    /**
     * Get updateUserid
     *
     * @return integer 
     */
    public function getUpdateUserid()
    {
        return $this->updateUserid;
    }

    /**
     * Set teamPictureFileType
     *
     * @param string $teamPictureFileType
     * @return UserTeam
     */
    public function setTeamPictureFileType($teamPictureFileType)
    {
        $this->teamPictureFileType = $teamPictureFileType;

        return $this;
    }

    /**
     * Get teamPictureFileType
     *
     * @return string 
     */
    public function getTeamPictureFileType()
    {
        return $this->teamPictureFileType;
    }

    /**
     * Get userTeamId
     *
     * @return integer 
     */
    public function getUserTeamId()
    {
        return $this->userTeamId;
    }

    /**
     * Set stateProv
     *
     * @param \LSI\SystemBundle\Entity\StateProv $stateProv
     * @return UserTeam
     */
    public function setStateProv(\LSI\SystemBundle\Entity\StateProv $stateProv = null)
    {
        $this->stateProv = $stateProv;

        return $this;
    }

    /**
     * Get stateProv
     *
     * @return \LSI\SystemBundle\Entity\StateProv 
     */
    public function getStateProv()
    {
        return $this->stateProv;
    }

    /**
     * Set salesProgramType
     *
     * @param \LSI\SystemBundle\Entity\SalesProgramType $salesProgramType
     * @return UserTeam
     */
    public function setSalesProgramType(\LSI\SystemBundle\Entity\SalesProgramType $salesProgramType = null)
    {
        $this->salesProgramType = $salesProgramType;

        return $this;
    }

    /**
     * Get salesProgramType
     *
     * @return \LSI\SystemBundle\Entity\SalesProgramType 
     */
    public function getSalesProgramType()
    {
        return $this->salesProgramType;
    }

    /**
     * Set teamManagerUserid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $teamManagerUserid
     * @return UserTeam
     */
    public function setTeamManagerUserid(\LSI\SystemBundle\Entity\UserMain $teamManagerUserid = null)
    {
        $this->teamManagerUserid = $teamManagerUserid;

        return $this;
    }

    /**
     * Get teamManagerUserid
     *
     * @return \LSI\SystemBundle\Entity\UserMain 
     */
    public function getTeamManagerUserid()
    {
        return $this->teamManagerUserid;
    }

    /**
     * Add userid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $userid
     * @return UserTeam
     */
    public function addUserid(\LSI\SystemBundle\Entity\UserMain $userid)
    {
        $this->userid[] = $userid;

        return $this;
    }

    /**
     * Remove userid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $userid
     */
    public function removeUserid(\LSI\SystemBundle\Entity\UserMain $userid)
    {
        $this->userid->removeElement($userid);
    }

    /**
     * Get userid
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
