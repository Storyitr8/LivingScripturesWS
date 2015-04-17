<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CustomerContact
 *
 * @ORM\Table(name="customer_contact", indexes={@ORM\Index(name="fk_contact_customermain", columns={"customer_main_id"}), @ORM\Index(name="fk_contact_stateprov", columns={"contact_state_prov"})})
 * @ORM\Entity
 */
class CustomerContact
{
    /**
     * @var string
     *
     * @ORM\Column(name="contact_name", type="string", length=30, nullable=true)
     */
    private $contactName;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_address", type="string", length=30, nullable=true)
     */
    private $contactAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_city", type="string", length=20, nullable=true)
     */
    private $contactCity;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_zip", type="string", length=9, nullable=true)
     */
    private $contactZip;

    /**
     * @var string
     *
     * @ORM\Column(name="contact_phone", type="string", length=10, nullable=true)
     */
    private $contactPhone;

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
     * @ORM\Column(name="contact_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $contactId;

    /**
     * @var \LSI\SystemBundle\Entity\StateProv
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\StateProv")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="contact_state_prov", referencedColumnName="state_prov")
     * })
     */
    private $contactStateProv;

    /**
     * @var \LSI\SystemBundle\Entity\CustomerMain
     *
     * @ORM\ManyToOne(targetEntity="LSI\SystemBundle\Entity\CustomerMain")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_main_id", referencedColumnName="customer_main_id")
     * })
     */
    private $customerMain;



    /**
     * Set contactName
     *
     * @param string $contactName
     * @return CustomerContact
     */
    public function setContactName($contactName)
    {
        $this->contactName = $contactName;

        return $this;
    }

    /**
     * Get contactName
     *
     * @return string 
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Set contactAddress
     *
     * @param string $contactAddress
     * @return CustomerContact
     */
    public function setContactAddress($contactAddress)
    {
        $this->contactAddress = $contactAddress;

        return $this;
    }

    /**
     * Get contactAddress
     *
     * @return string 
     */
    public function getContactAddress()
    {
        return $this->contactAddress;
    }

    /**
     * Set contactCity
     *
     * @param string $contactCity
     * @return CustomerContact
     */
    public function setContactCity($contactCity)
    {
        $this->contactCity = $contactCity;

        return $this;
    }

    /**
     * Get contactCity
     *
     * @return string 
     */
    public function getContactCity()
    {
        return $this->contactCity;
    }

    /**
     * Set contactZip
     *
     * @param string $contactZip
     * @return CustomerContact
     */
    public function setContactZip($contactZip)
    {
        $this->contactZip = $contactZip;

        return $this;
    }

    /**
     * Get contactZip
     *
     * @return string 
     */
    public function getContactZip()
    {
        return $this->contactZip;
    }

    /**
     * Set contactPhone
     *
     * @param string $contactPhone
     * @return CustomerContact
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;

        return $this;
    }

    /**
     * Get contactPhone
     *
     * @return string 
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * Set createDate
     *
     * @param \DateTime $createDate
     * @return CustomerContact
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
     * @return CustomerContact
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
     * @return CustomerContact
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
     * @return CustomerContact
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
     * Get contactId
     *
     * @return integer 
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set contactStateProv
     *
     * @param \LSI\SystemBundle\Entity\StateProv $contactStateProv
     * @return CustomerContact
     */
    public function setContactStateProv(\LSI\SystemBundle\Entity\StateProv $contactStateProv = null)
    {
        $this->contactStateProv = $contactStateProv;

        return $this;
    }

    /**
     * Get contactStateProv
     *
     * @return \LSI\SystemBundle\Entity\StateProv 
     */
    public function getContactStateProv()
    {
        return $this->contactStateProv;
    }

    /**
     * Set customerMain
     *
     * @param \LSI\SystemBundle\Entity\CustomerMain $customerMain
     * @return CustomerContact
     */
    public function setCustomerMain(\LSI\SystemBundle\Entity\CustomerMain $customerMain = null)
    {
        $this->customerMain = $customerMain;

        return $this;
    }

    /**
     * Get customerMain
     *
     * @return \LSI\SystemBundle\Entity\CustomerMain 
     */
    public function getCustomerMain()
    {
        return $this->customerMain;
    }
}
