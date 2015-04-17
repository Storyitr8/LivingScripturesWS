<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * UserMain
 *
 * @ORM\Table(name="user_main", indexes={@ORM\Index(name="FK__user_main__schoo__3DD3211E", columns={"school_id"}), @ORM\Index(name="FK__user_main__user___3EC74557", columns={"user_role"}), @ORM\Index(name="FK__user_main__user___40AF8DC9", columns={"user_status"}), @ORM\Index(name="FK__user_main__state__3FBB6990", columns={"state_prov"}), @ORM\Index(name="fk_usermain_salesprogramtype", columns={"sales_program_type"})})
 * @ORM\Entity(repositoryClass="LSI\SystemBundle\Repository\UserMainRepository")
 */
class UserMain implements UserInterface, \Serializable
{
    /**
     * @var integer
     *
     * @ORM\Column(name="slsm_no", type="integer", nullable=false)
     */
    private $slsmNo;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=10, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="user_password", type="string", length=50, nullable=false)
     */
    private $userPassword;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="nick_name", type="string", length=50, nullable=true)
     */
    private $nickName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var integer
     *
     * @ORM\Column(name="level", type="integer", nullable=true)
     */
    private $level;

    /**
     * @var string
     *
     * @ORM\Column(name="preferred_phone", type="string", length=10, nullable=true)
     */
    private $preferredPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="alt_phone", type="string", length=10, nullable=true)
     */
    private $altPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=50, nullable=true)
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="zip_code", type="string", length=10, nullable=true)
     */
    private $zipCode;

    /**
     * @var string
     *
     * @ORM\Column(name="user_bio", type="string", length=255, nullable=true)
     */
    private $userBio;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="hire_date", type="date", nullable=false)
     */
    private $hireDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="hiring_userid", type="integer", nullable=true)
     */
    private $hiringUserid;

    /**
     * @var integer
     *
     * @ORM\Column(name="is_verifier", type="integer", nullable=true)
     */
    private $isVerifier;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="date", nullable=false)
     */
    private $createDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="create_userid", type="integer", nullable=false)
     */
    private $createUserid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="update_date", type="date", nullable=false)
     */
    private $updateDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="update_userid", type="integer", nullable=false)
     */
    private $updateUserid;

    /**
     * @var string
     *
     * @ORM\Column(name="picture_file_type", type="string", length=10, nullable=true)
     */
    private $pictureFileType;

    /**
     * @var integer
     *
     * @ORM\Column(name="start_summer_sales_week_id", type="integer", nullable=true)
     */
    private $startSummerSalesWeekId;

    /**
     * @var integer
     *
     * @ORM\Column(name="end_summer_sales_week_id", type="integer", nullable=true)
     */
    private $endSummerSalesWeekId;

    /**
     * @var integer
     *
     * @ORM\Column(name="userid", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

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
     * @var \LSI\SystemBundle\Entity\StateProv
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\StateProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="state_prov", referencedColumnName="state_prov")
     * })
     */
    private $stateProv;

    /**
     * @var \LSI\SystemBundle\Entity\UserStatus
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_status", referencedColumnName="user_status")
     * })
     */
    private $userStatus;

    /**
     * @var \LSI\SystemBundle\Entity\School
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\School")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="school_id", referencedColumnName="school_id")
     * })
     */
    private $school;

    /**
     * @var \LSI\SystemBundle\Entity\UserRole
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserRole")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_role", referencedColumnName="user_role")
     * })
     */
    private $userRole;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="LSI\SystemBundle\Entity\UserTeam", inversedBy="userid")
     * @ORM\JoinTable(name="user_main_user_team_xref",
     *   joinColumns={
     *     @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="user_team_id", referencedColumnName="user_team_id")
     *   }
     * )
     */
    private $userTeam;

    private $isActive;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->userTeam = new \Doctrine\Common\Collections\ArrayCollection();
    }


    /**
     * Set slsmNo
     *
     * @param integer $slsmNo
     * @return UserMain
     */
    public function setSlsmNo($slsmNo)
    {
        $this->slsmNo = $slsmNo;

        return $this;
    }

    /**
     * Get slsmNo
     *
     * @return integer 
     */
    public function getSlsmNo()
    {
        return $this->slsmNo;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return UserMain
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set userPassword
     *
     * @param string $userPassword
     * @return UserMain
     */
    public function setUserPassword($userPassword)
    {
        $this->userPassword = $userPassword;

        return $this;
    }

    /**
     * Get userPassword
     *
     * @return string 
     */
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     * @return UserMain
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string 
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     * @return UserMain
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string 
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set nickName
     *
     * @param string $nickName
     * @return UserMain
     */
    public function setNickName($nickName)
    {
        $this->nickName = $nickName;

        return $this;
    }

    /**
     * Get nickName
     *
     * @return string 
     */
    public function getNickName()
    {
        return $this->nickName;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return UserMain
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set level
     *
     * @param integer $level
     * @return UserMain
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer 
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set preferredPhone
     *
     * @param string $preferredPhone
     * @return UserMain
     */
    public function setPreferredPhone($preferredPhone)
    {
        $this->preferredPhone = $preferredPhone;

        return $this;
    }

    /**
     * Get preferredPhone
     *
     * @return string 
     */
    public function getPreferredPhone()
    {
        return $this->preferredPhone;
    }

    /**
     * Set altPhone
     *
     * @param string $altPhone
     * @return UserMain
     */
    public function setAltPhone($altPhone)
    {
        $this->altPhone = $altPhone;

        return $this;
    }

    /**
     * Get altPhone
     *
     * @return string 
     */
    public function getAltPhone()
    {
        return $this->altPhone;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return UserMain
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return UserMain
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set zipCode
     *
     * @param string $zipCode
     * @return UserMain
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;

        return $this;
    }

    /**
     * Get zipCode
     *
     * @return string 
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * Set userBio
     *
     * @param string $userBio
     * @return UserMain
     */
    public function setUserBio($userBio)
    {
        $this->userBio = $userBio;

        return $this;
    }

    /**
     * Get userBio
     *
     * @return string 
     */
    public function getUserBio()
    {
        return $this->userBio;
    }

    /**
     * Set picture
     *
     * @param string $picture
     * @return UserMain
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get picture
     *
     * @return string 
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set hireDate
     *
     * @param \DateTime $hireDate
     * @return UserMain
     */
    public function setHireDate($hireDate)
    {
        $this->hireDate = $hireDate;

        return $this;
    }

    /**
     * Get hireDate
     *
     * @return \DateTime 
     */
    public function getHireDate()
    {
        return $this->hireDate;
    }

    /**
     * Set hiringUserid
     *
     * @param integer $hiringUserid
     * @return UserMain
     */
    public function setHiringUserid($hiringUserid)
    {
        $this->hiringUserid = $hiringUserid;

        return $this;
    }

    /**
     * Get hiringUserid
     *
     * @return integer 
     */
    public function getHiringUserid()
    {
        return $this->hiringUserid;
    }

    /**
     * Set isVerifier
     *
     * @param integer $isVerifier
     * @return UserMain
     */
    public function setIsVerifier($isVerifier)
    {
        $this->isVerifier = $isVerifier;

        return $this;
    }

    /**
     * Get isVerifier
     *
     * @return integer 
     */
    public function getIsVerifier()
    {
        return $this->isVerifier;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return UserMain
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
     * @return UserMain
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
     * @return UserMain
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
     * @return UserMain
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
     * Set pictureFileType
     *
     * @param string $pictureFileType
     * @return UserMain
     */
    public function setPictureFileType($pictureFileType)
    {
        $this->pictureFileType = $pictureFileType;

        return $this;
    }

    /**
     * Get pictureFileType
     *
     * @return string 
     */
    public function getPictureFileType()
    {
        return $this->pictureFileType;
    }

    /**
     * Set startSummerSalesWeekId
     *
     * @param integer $startSummerSalesWeekId
     * @return UserMain
     */
    public function setStartSummerSalesWeekId($startSummerSalesWeekId)
    {
        $this->startSummerSalesWeekId = $startSummerSalesWeekId;

        return $this;
    }

    /**
     * Get startSummerSalesWeekId
     *
     * @return integer 
     */
    public function getStartSummerSalesWeekId()
    {
        return $this->startSummerSalesWeekId;
    }

    /**
     * Set endSummerSalesWeekId
     *
     * @param integer $endSummerSalesWeekId
     * @return UserMain
     */
    public function setEndSummerSalesWeekId($endSummerSalesWeekId)
    {
        $this->endSummerSalesWeekId = $endSummerSalesWeekId;

        return $this;
    }

    /**
     * Get endSummerSalesWeekId
     *
     * @return integer 
     */
    public function getEndSummerSalesWeekId()
    {
        return $this->endSummerSalesWeekId;
    }

    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set salesProgramType
     *
     * @param \LSI\SystemBundle\Entity\SalesProgramType $salesProgramType
     * @return UserMain
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
     * Set stateProv
     *
     * @param \LSI\SystemBundle\Entity\StateProv $stateProv
     * @return UserMain
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
     * Set userStatus
     *
     * @param \LSI\SystemBundle\Entity\UserStatus $userStatus
     * @return UserMain
     */
    public function setUserStatus(\LSI\SystemBundle\Entity\UserStatus $userStatus = null)
    {
        $this->userStatus = $userStatus;

        return $this;
    }

    /**
     * Get userStatus
     *
     * @return \LSI\SystemBundle\Entity\UserStatus 
     */
    public function getUserStatus()
    {
        return $this->userStatus;
    }

    /**
     * Set school
     *
     * @param \LSI\SystemBundle\Entity\School $school
     * @return UserMain
     */
    public function setSchool(\LSI\SystemBundle\Entity\School $school = null)
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
     * Set userRole
     *
     * @param \LSI\SystemBundle\Entity\UserRole $userRole
     * @return UserMain
     */
    public function setUserRole(\LSI\SystemBundle\Entity\UserRole $userRole = null)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     * @return \LSI\SystemBundle\Entity\UserRole 
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

    /**
     * Add userTeam
     *
     * @param \LSI\SystemBundle\Entity\UserTeam $userTeam
     * @return UserMain
     */
    public function addUserTeam(\LSI\SystemBundle\Entity\UserTeam $userTeam)
    {
        $this->userTeam[] = $userTeam;

        return $this;
    }

    /**
     * Remove userTeam
     *
     * @param \LSI\SystemBundle\Entity\UserTeam $userTeam
     */
    public function removeUserTeam(\LSI\SystemBundle\Entity\UserTeam $userTeam)
    {
        $this->userTeam->removeElement($userTeam);
    }

    /**
     * Get userTeam
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getUserTeam()
    {
        return $this->userTeam;
    }

    public function getPassword()
    {
        return $this->userPassword;
    }

    public function setPassword($password)
    {
        $this->userPassword = $password;
        return $this;
    }

    public function getSalt()
    {
        return '';
    }

    public function getRoles()
    {
        $role = $this->getUserRole();
        switch($role->getUserRole()){
            case 'A':
                return array('ROLE_ADMIN');
                break;
            case 'C':
                return array('ROLE_ACTIVE_ADMIN');
                break;
            case 'M':
                return array('ROLE_MANAGER');
                break;
            case 'R':
                return array('ROLE_USER');
                break;
            case 'S':
                return array('ROLE_SCHOOL');
                break;
            default:
                return array('ROLE_USER');
                break;
        }
    }

    public function eraseCredentials()
    {
    }

    public function serialize()
    {
        return serialize(array(
            $this->userid,
            $this->username,
            $this->getPassword(),
            $this->getSalt(),
            $this->getIsActive()
        ));
    }

    public function unserialize($serialized)
    {
        list (
            $this->userid,
            $this->username,
            $this->userPassword,
            $this->salt,
            $this->isActive
            ) = unserialize($serialized);
    }

    public function isAccountNonExpired()
    {
        return true;
    }

    public function isAccountNonLocked()
    {
        return true;
    }

    public function isCredentialsNonExpired()
    {
        return true;
    }

    public function getIsActive()
    {
        return true;//$this->isActive;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
        return $this;
    }

    public function isEnabled()
    {
        return $this->getIsActive();
    }

    public function getFullName()
    {
        return $this->firstName.' '.$this->lastName;
    }

    public function getStatusString()
    {
        return $this->userStatus->getUserStatusDesc();
    }
}
