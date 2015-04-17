<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NewsletterPartVideo
 *
 * @ORM\Table(name="newsletter_part_video", indexes={@ORM\Index(name="FK__newslette__newsl__092A4EB5", columns={"newsletter_part_id"})})
 * @ORM\Entity
 */
class NewsletterPartVideo
{
    /**
     * @var string
     *
     * @ORM\Column(name="video_file", type="string", length=60, nullable=false)
     */
    private $videoFile;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_width", type="integer", nullable=false)
     */
    private $videoWidth;

    /**
     * @var integer
     *
     * @ORM\Column(name="video_height", type="integer", nullable=false)
     */
    private $videoHeight;

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
     * @ORM\Column(name="newsletter_part_video_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $newsletterPartVideoId;

    /**
     * @var \LSI\SystemBundle\Entity\NewsletterPart
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\NewsletterPart")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="newsletter_part_id", referencedColumnName="newsletter_part_id")
     * })
     */
    private $newsletterPart;



    /**
     * Set videoFile
     *
     * @param string $videoFile
     * @return NewsletterPartVideo
     */
    public function setVideoFile($videoFile)
    {
        $this->videoFile = $videoFile;

        return $this;
    }

    /**
     * Get videoFile
     *
     * @return string 
     */
    public function getVideoFile()
    {
        return $this->videoFile;
    }

    /**
     * Set videoWidth
     *
     * @param integer $videoWidth
     * @return NewsletterPartVideo
     */
    public function setVideoWidth($videoWidth)
    {
        $this->videoWidth = $videoWidth;

        return $this;
    }

    /**
     * Get videoWidth
     *
     * @return integer 
     */
    public function getVideoWidth()
    {
        return $this->videoWidth;
    }

    /**
     * Set videoHeight
     *
     * @param integer $videoHeight
     * @return NewsletterPartVideo
     */
    public function setVideoHeight($videoHeight)
    {
        $this->videoHeight = $videoHeight;

        return $this;
    }

    /**
     * Get videoHeight
     *
     * @return integer 
     */
    public function getVideoHeight()
    {
        return $this->videoHeight;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return NewsletterPartVideo
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
     * @return NewsletterPartVideo
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
     * @return NewsletterPartVideo
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
     * @return NewsletterPartVideo
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
     * Get newsletterPartVideoId
     *
     * @return integer 
     */
    public function getNewsletterPartVideoId()
    {
        return $this->newsletterPartVideoId;
    }

    /**
     * Set newsletterPart
     *
     * @param \LSI\SystemBundle\Entity\NewsletterPart $newsletterPart
     * @return NewsletterPartVideo
     */
    public function setNewsletterPart(\LSI\SystemBundle\Entity\NewsletterPart $newsletterPart = null)
    {
        $this->newsletterPart = $newsletterPart;

        return $this;
    }

    /**
     * Get newsletterPart
     *
     * @return \LSI\SystemBundle\Entity\NewsletterPart 
     */
    public function getNewsletterPart()
    {
        return $this->newsletterPart;
    }
}
