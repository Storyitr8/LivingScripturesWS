<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * WebpagePermission
 *
 * @ORM\Table(name="webpage_permission", indexes={@ORM\Index(name="FK__webpage_p__useri__742F31CF", columns={"userid"}), @ORM\Index(name="FK__webpage_p__webpa__7246E95D", columns={"webpage_id"}), @ORM\Index(name="FK__webpage_p__user___733B0D96", columns={"user_role"})})
 * @ORM\Entity
 */
class WebpagePermission
{
    /**
     * @var string
     *
     * @ORM\Column(name="active_status", type="string", length=1, nullable=false)
     */
    private $activeStatus;

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
     * @var integer
     *
     * @ORM\Column(name="webpage_permission_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $webpagePermissionId;

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
     * @var \LSI\SystemBundle\Entity\Webpage
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\Webpage")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="webpage_id", referencedColumnName="webpage_id")
     * })
     */
    private $webpage;

    /**
     * @var \LSI\SystemBundle\Entity\UserMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\UserMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     * })
     */
    private $userid;



    /**
     * Set activeStatus
     *
     * @param string $activeStatus
     * @return WebpagePermission
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
     * @return WebpagePermission
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
     * @return WebpagePermission
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
     * @return WebpagePermission
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
     * @return WebpagePermission
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
     * Get webpagePermissionId
     *
     * @return integer 
     */
    public function getWebpagePermissionId()
    {
        return $this->webpagePermissionId;
    }

    /**
     * Set userRole
     *
     * @param \LSI\SystemBundle\Entity\UserRole $userRole
     * @return WebpagePermission
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
     * Set webpage
     *
     * @param \LSI\SystemBundle\Entity\Webpage $webpage
     * @return WebpagePermission
     */
    public function setWebpage(\LSI\SystemBundle\Entity\Webpage $webpage = null)
    {
        $this->webpage = $webpage;

        return $this;
    }

    /**
     * Get webpage
     *
     * @return \LSI\SystemBundle\Entity\Webpage 
     */
    public function getWebpage()
    {
        return $this->webpage;
    }

    /**
     * Set userid
     *
     * @param \LSI\SystemBundle\Entity\UserMain $userid
     * @return WebpagePermission
     */
    public function setUserid(\LSI\SystemBundle\Entity\UserMain $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     * @return \LSI\SystemBundle\Entity\UserMain 
     */
    public function getUserid()
    {
        return $this->userid;
    }
}
