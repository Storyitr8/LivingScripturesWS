<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterPart
 *
 ** @ORM\Table(name="newsletter_part")
 ** @ORM\Entity
 */
class NewsletterPart
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="newsletter_part_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsletterPartId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="newsletter_part_desc", type="string", length=50, nullable=false)
     */
    private $newsletterPartDesc;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="newsletter_part_sort_order", type="smallint", nullable=true)
     */
    private $newsletterPartSortOrder;

    /**
     *** @var string
     *
     ** @ORM\Column(name="newsletter_part_body", type="text", nullable=true)
     */
    private $newsletterPartBody;

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
     *  * @ORM\JoinColumn(name="newsletter_part_approved_by_userid", referencedColumnName="userid")
     * })
     */
    private $newsletterPartApprovedByUserid;

    /**
     *** @var \NewsletterMain
     *
     ** @ORM\ManyToOne(targetEntity="NewsletterMain")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="newsletter_main_id", referencedColumnName="newsletter_main_id")
     * })
     */
    private $newsletterMain;


    /**
     * Get newsletterPartId
     *
     ** @return integer
     */
    public function getNewsletterPartId()
    {
        return $this->newsletterPartId;
    }

    /**
     * Set newsletterPartDesc
     *
     ** @param string $newsletterPartDesc
     ** @return NewsletterPart
     */
    public function setNewsletterPartDesc($newsletterPartDesc)
    {
        $this->newsletterPartDesc = $newsletterPartDesc;

        return $this;
    }

    /**
     * Get newsletterPartDesc
     *
     ** @return string
     */
    public function getNewsletterPartDesc()
    {
        return $this->newsletterPartDesc;
    }

    /**
     * Set newsletterPartSortOrder
     *
     ** @param integer $newsletterPartSortOrder
     ** @return NewsletterPart
     */
    public function setNewsletterPartSortOrder($newsletterPartSortOrder)
    {
        $this->newsletterPartSortOrder = $newsletterPartSortOrder;

        return $this;
    }

    /**
     * Get newsletterPartSortOrder
     *
     ** @return integer
     */
    public function getNewsletterPartSortOrder()
    {
        return $this->newsletterPartSortOrder;
    }

    /**
     * Set newsletterPartBody
     *
     ** @param string $newsletterPartBody
     ** @return NewsletterPart
     */
    public function setNewsletterPartBody($newsletterPartBody)
    {
        $this->newsletterPartBody = $newsletterPartBody;

        return $this;
    }

    /**
     * Get newsletterPartBody
     *
     ** @return string
     */
    public function getNewsletterPartBody()
    {
        return $this->newsletterPartBody;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return NewsletterPart
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
     ** @return NewsletterPart
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
     ** @return NewsletterPart
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
     ** @return NewsletterPart
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
     ** @return NewsletterPart
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
     * Set newsletterPartApprovedByUserid
     *
     ** @param \UserMain $newsletterPartApprovedByUserid
     ** @return NewsletterPart
     */
    public function setNewsletterPartApprovedByUserid(\LSI\SystemBundle\Entity\UserMain $newsletterPartApprovedByUserid = null)
    {
        $this->newsletterPartApprovedByUserid = $newsletterPartApprovedByUserid;

        return $this;
    }

    /**
     * Get newsletterPartApprovedByUserid
     *
     ** @return \UserMain
     */
    public function getNewsletterPartApprovedByUserid()
    {
        return $this->newsletterPartApprovedByUserid;
    }

    /**
     * Set newsletterMain
     *
     ** @param \NewsletterMain $newsletterMain
     ** @return NewsletterPart
     */
    public function setNewsletterMain(\LSI\SystemBundle\Entity\NewsletterMain $newsletterMain = null)
    {
        $this->newsletterMain = $newsletterMain;

        return $this;
    }

    /**
     * Get newsletterMain
     *
     ** @return \NewsletterMain
     */
    public function getNewsletterMain()
    {
        return $this->newsletterMain;
    }
}
