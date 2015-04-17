<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * WebpagePermission
 *
 ** @ORM\Table(name="webpage_permission")
 ** @ORM\Entity
 */
class WebpagePermission
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="webpage_permission_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $webpagePermissionId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="active_status", type="string", length=1, nullable=false)
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
     *** @var \UserMain
     *
     ** @ORM\ManyToOne(targetEntity="UserMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="userid", referencedColumnName="userid")
     * })
     */
    private $userid;

    /**
     *** @var \Webpage
     *
     ** @ORM\ManyToOne(targetEntity="Webpage")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="webpage_id", referencedColumnName="webpage_id")
     * })
     */
    private $webpage;

    /**
     *** @var \UserRole
     *
     ** @ORM\ManyToOne(targetEntity="UserRole")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="user_role", referencedColumnName="user_role")
     * })
     */
    private $userRole;


    /**
     * Get webpagePermissionId
     *
     ** @return integer
     */
    public function getWebpagePermissionId()
    {
        return $this->webpagePermissionId;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return WebpagePermission
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
     ** @return WebpagePermission
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
     ** @return WebpagePermission
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
     ** @return WebpagePermission
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
     ** @return WebpagePermission
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

    /**
     * Set userid
     *
     ** @param \UserMain $userid
     ** @return WebpagePermission
     */
    public function setUserid(\LSI\SystemBundle\Entity\UserMain $userid = null)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     ** @return \UserMain
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set webpage
     *
     ** @param \Webpage $webpage
     ** @return WebpagePermission
     */
    public function setWebpage(\LSI\SystemBundle\Entity\Webpage $webpage = null)
    {
        $this->webpage = $webpage;

        return $this;
    }

    /**
     * Get webpage
     *
     ** @return \Webpage
     */
    public function getWebpage()
    {
        return $this->webpage;
    }

    /**
     * Set userRole
     *
     ** @param \UserRole $userRole
     ** @return WebpagePermission
     */
    public function setUserRole(\LSI\SystemBundle\Entity\UserRole $userRole = null)
    {
        $this->userRole = $userRole;

        return $this;
    }

    /**
     * Get userRole
     *
     ** @return \UserRole
     */
    public function getUserRole()
    {
        return $this->userRole;
    }
}
