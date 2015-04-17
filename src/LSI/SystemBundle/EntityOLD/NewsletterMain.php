<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterMain
 *
 ** @ORM\Table(name="newsletter_main")
 ** @ORM\Entity
 */
class NewsletterMain
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="newsletter_main_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsletterMainId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="newsletter_main_desc", type="string", length=50, nullable=false)
     */
    private $newsletterMainDesc;

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
     *** @var \SummerSalesWeek
     *
     ** @ORM\ManyToOne(targetEntity="SummerSalesWeek")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="summer_sales_week_id", referencedColumnName="summer_sales_week_id")
     * })
     */
    private $summerSalesWeek;


    /**
     * Get newsletterMainId
     *
     ** @return integer
     */
    public function getNewsletterMainId()
    {
        return $this->newsletterMainId;
    }

    /**
     * Set newsletterMainDesc
     *
     ** @param string $newsletterMainDesc
     ** @return NewsletterMain
     */
    public function setNewsletterMainDesc($newsletterMainDesc)
    {
        $this->newsletterMainDesc = $newsletterMainDesc;

        return $this;
    }

    /**
     * Get newsletterMainDesc
     *
     ** @return string
     */
    public function getNewsletterMainDesc()
    {
        return $this->newsletterMainDesc;
    }

    /**
     * Set activeStatus
     *
     ** @param string $activeStatus
     ** @return NewsletterMain
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
     ** @return NewsletterMain
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
     ** @return NewsletterMain
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
     ** @return NewsletterMain
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
     ** @return NewsletterMain
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
     * Set summerSalesWeek
     *
     ** @param \SummerSalesWeek $summerSalesWeek
     ** @return NewsletterMain
     */
    public function setSummerSalesWeek(\LSI\SystemBundle\Entity\SummerSalesWeek $summerSalesWeek = null)
    {
        $this->summerSalesWeek = $summerSalesWeek;

        return $this;
    }

    /**
     * Get summerSalesWeek
     *
     ** @return \SummerSalesWeek
     */
    public function getSummerSalesWeek()
    {
        return $this->summerSalesWeek;
    }
}
