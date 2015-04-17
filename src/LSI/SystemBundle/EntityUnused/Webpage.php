<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Webpage
 *
 * @ORM\Table(name="webpage")
 * @ORM\Entity
 */
class Webpage
{
    /**
     * @var string
     *
     * @ORM\Column(name="webpage_directory", type="string", length=60, nullable=false)
     */
    private $webpageDirectory;

    /**
     * @var string
     *
     * @ORM\Column(name="webpage_file_name", type="string", length=60, nullable=true)
     */
    private $webpageFileName;

    /**
     * @var string
     *
     * @ORM\Column(name="webpage_desc", type="string", length=60, nullable=false)
     */
    private $webpageDesc;

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
     * @ORM\Column(name="webpage_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $webpageId;



    /**
     * Set webpageDirectory
     *
     * @param string $webpageDirectory
     * @return Webpage
     */
    public function setWebpageDirectory($webpageDirectory)
    {
        $this->webpageDirectory = $webpageDirectory;

        return $this;
    }

    /**
     * Get webpageDirectory
     *
     * @return string 
     */
    public function getWebpageDirectory()
    {
        return $this->webpageDirectory;
    }

    /**
     * Set webpageFileName
     *
     * @param string $webpageFileName
     * @return Webpage
     */
    public function setWebpageFileName($webpageFileName)
    {
        $this->webpageFileName = $webpageFileName;

        return $this;
    }

    /**
     * Get webpageFileName
     *
     * @return string 
     */
    public function getWebpageFileName()
    {
        return $this->webpageFileName;
    }

    /**
     * Set webpageDesc
     *
     * @param string $webpageDesc
     * @return Webpage
     */
    public function setWebpageDesc($webpageDesc)
    {
        $this->webpageDesc = $webpageDesc;

        return $this;
    }

    /**
     * Get webpageDesc
     *
     * @return string 
     */
    public function getWebpageDesc()
    {
        return $this->webpageDesc;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return Webpage
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
     * @return Webpage
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
     * @return Webpage
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
     * @return Webpage
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
     * Get webpageId
     *
     * @return integer 
     */
    public function getWebpageId()
    {
        return $this->webpageId;
    }
}
