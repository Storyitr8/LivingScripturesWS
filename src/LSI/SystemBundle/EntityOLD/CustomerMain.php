<?php
namespace LSI\SystemBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * CustomerMain
 *
 ** @ORM\Table(name="customer_main")
 ** @ORM\Entity
 */
class CustomerMain
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="customer_main_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerMainId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="first_name", type="string", length=30, nullable=false)
     */
    private $firstName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="last_name", type="string", length=30, nullable=false)
     */
    private $lastName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="home_phone", type="string", length=10, nullable=true)
     */
    private $homePhone;

    /**
     *** @var string
     *
     ** @ORM\Column(name="work_phone", type="string", length=10, nullable=true)
     */
    private $workPhone;

    /**
     *** @var string
     *
     ** @ORM\Column(name="email", type="string", length=60, nullable=true)
     */
    private $email;

    /**
     *** @var boolean
     *
     ** @ORM\Column(name="email_fhe", type="boolean", nullable=true)
     */
    private $emailFhe;

    /**
     *** @var string
     *
     ** @ORM\Column(name="billing_address", type="string", length=60, nullable=false)
     */
    private $billingAddress;

    /**
     *** @var string
     *
     ** @ORM\Column(name="billing_address2", type="string", length=60, nullable=true)
     */
    private $billingAddress2;

    /**
     *** @var string
     *
     ** @ORM\Column(name="billing_city", type="string", length=20, nullable=false)
     */
    private $billingCity;

    /**
     *** @var string
     *
     ** @ORM\Column(name="billing_zipcode", type="string", length=9, nullable=false)
     */
    private $billingZipcode;

    /**
     *** @var string
     *
     ** @ORM\Column(name="ssn", type="string", length=9, nullable=true)
     */
    private $ssn;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="birth_date", type="date", nullable=true)
     */
    private $birthDate;

    /**
     *** @var string
     *
     ** @ORM\Column(name="employer", type="string", length=30, nullable=true)
     */
    private $employer;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_first_name", type="string", length=30, nullable=false)
     */
    private $shippingFirstName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_last_name", type="string", length=30, nullable=false)
     */
    private $shippingLastName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_address", type="string", length=60, nullable=false)
     */
    private $shippingAddress;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_address2", type="string", length=60, nullable=true)
     */
    private $shippingAddress2;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_city", type="string", length=20, nullable=false)
     */
    private $shippingCity;

    /**
     *** @var string
     *
     ** @ORM\Column(name="shipping_zipcode", type="string", length=9, nullable=false)
     */
    private $shippingZipcode;

    /**
     *** @var string
     *
     ** @ORM\Column(name="joint_buyers_first_name", type="string", length=30, nullable=true)
     */
    private $jointBuyersFirstName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="joint_buyers_last_name", type="string", length=30, nullable=true)
     */
    private $jointBuyersLastName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="joint_buyers_ssn", type="string", length=9, nullable=true)
     */
    private $jointBuyersSsn;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="kids_age_from", type="smallint", nullable=true)
     */
    private $kidsAgeFrom;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="kids_age_to", type="smallint", nullable=true)
     */
    private $kidsAgeTo;

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
     *** @var integer
     *
     ** @ORM\Column(name="age_youngest_child", type="smallint", nullable=true)
     */
    private $ageYoungestChild;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="number_of_children", type="smallint", nullable=true)
     */
    private $numberOfChildren;

    /**
     *** @var string
     *
     ** @ORM\Column(name="not_lds", type="string", length=10, nullable=true)
     */
    private $notLds;

    /**
     *** @var \AnnualIncome
     *
     ** @ORM\ManyToOne(targetEntity="AnnualIncome")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="annual_income_id", referencedColumnName="annual_income_id")
     * })
     */
    private $annualIncome;

    /**
     *** @var \StateProv
     *
     ** @ORM\ManyToOne(targetEntity="StateProv")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="billing_state_prov", referencedColumnName="state_prov")
     * })
     */
    private $billingStateProv;

    /**
     *** @var \StateProv
     *
     ** @ORM\ManyToOne(targetEntity="StateProv")
     ** @ORM\JoinColumns({
     *  * @ORM\JoinColumn(name="shipping_state_prov", referencedColumnName="state_prov")
     * })
     */
    private $shippingStateProv;


    /**
     * Get customerMainId
     *
     ** @return integer
     */
    public function getCustomerMainId()
    {
        return $this->customerMainId;
    }

    /**
     * Set firstName
     *
     ** @param string $firstName
     ** @return CustomerMain
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     ** @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     ** @param string $lastName
     ** @return CustomerMain
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     ** @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set homePhone
     *
     ** @param string $homePhone
     ** @return CustomerMain
     */
    public function setHomePhone($homePhone)
    {
        $this->homePhone = $homePhone;

        return $this;
    }

    /**
     * Get homePhone
     *
     ** @return string
     */
    public function getHomePhone()
    {
        return $this->homePhone;
    }

    /**
     * Set workPhone
     *
     ** @param string $workPhone
     ** @return CustomerMain
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;

        return $this;
    }

    /**
     * Get workPhone
     *
     ** @return string
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * Set email
     *
     ** @param string $email
     ** @return CustomerMain
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     ** @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailFhe
     *
     ** @param boolean $emailFhe
     ** @return CustomerMain
     */
    public function setEmailFhe($emailFhe)
    {
        $this->emailFhe = $emailFhe;

        return $this;
    }

    /**
     * Get emailFhe
     *
     ** @return boolean
     */
    public function getEmailFhe()
    {
        return $this->emailFhe;
    }

    /**
     * Set billingAddress
     *
     ** @param string $billingAddress
     ** @return CustomerMain
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * Get billingAddress
     *
     ** @return string
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set billingAddress2
     *
     ** @param string $billingAddress2
     ** @return CustomerMain
     */
    public function setBillingAddress2($billingAddress2)
    {
        $this->billingAddress2 = $billingAddress2;

        return $this;
    }

    /**
     * Get billingAddress2
     *
     ** @return string
     */
    public function getBillingAddress2()
    {
        return $this->billingAddress2;
    }

    /**
     * Set billingCity
     *
     ** @param string $billingCity
     ** @return CustomerMain
     */
    public function setBillingCity($billingCity)
    {
        $this->billingCity = $billingCity;

        return $this;
    }

    /**
     * Get billingCity
     *
     ** @return string
     */
    public function getBillingCity()
    {
        return $this->billingCity;
    }

    /**
     * Set billingZipcode
     *
     ** @param string $billingZipcode
     ** @return CustomerMain
     */
    public function setBillingZipcode($billingZipcode)
    {
        $this->billingZipcode = $billingZipcode;

        return $this;
    }

    /**
     * Get billingZipcode
     *
     ** @return string
     */
    public function getBillingZipcode()
    {
        return $this->billingZipcode;
    }

    /**
     * Set ssn
     *
     ** @param string $ssn
     ** @return CustomerMain
     */
    public function setSsn($ssn)
    {
        $this->ssn = $ssn;

        return $this;
    }

    /**
     * Get ssn
     *
     ** @return string
     */
    public function getSsn()
    {
        return $this->ssn;
    }

    /**
     * Set birthDate
     *
     ** @param \DateTime $birthDate
     ** @return CustomerMain
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     ** @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * Set employer
     *
     ** @param string $employer
     ** @return CustomerMain
     */
    public function setEmployer($employer)
    {
        $this->employer = $employer;

        return $this;
    }

    /**
     * Get employer
     *
     ** @return string
     */
    public function getEmployer()
    {
        return $this->employer;
    }

    /**
     * Set shippingFirstName
     *
     ** @param string $shippingFirstName
     ** @return CustomerMain
     */
    public function setShippingFirstName($shippingFirstName)
    {
        $this->shippingFirstName = $shippingFirstName;

        return $this;
    }

    /**
     * Get shippingFirstName
     *
     ** @return string
     */
    public function getShippingFirstName()
    {
        return $this->shippingFirstName;
    }

    /**
     * Set shippingLastName
     *
     ** @param string $shippingLastName
     ** @return CustomerMain
     */
    public function setShippingLastName($shippingLastName)
    {
        $this->shippingLastName = $shippingLastName;

        return $this;
    }

    /**
     * Get shippingLastName
     *
     ** @return string
     */
    public function getShippingLastName()
    {
        return $this->shippingLastName;
    }

    /**
     * Set shippingAddress
     *
     ** @param string $shippingAddress
     ** @return CustomerMain
     */
    public function setShippingAddress($shippingAddress)
    {
        $this->shippingAddress = $shippingAddress;

        return $this;
    }

    /**
     * Get shippingAddress
     *
     ** @return string
     */
    public function getShippingAddress()
    {
        return $this->shippingAddress;
    }

    /**
     * Set shippingAddress2
     *
     ** @param string $shippingAddress2
     ** @return CustomerMain
     */
    public function setShippingAddress2($shippingAddress2)
    {
        $this->shippingAddress2 = $shippingAddress2;

        return $this;
    }

    /**
     * Get shippingAddress2
     *
     ** @return string
     */
    public function getShippingAddress2()
    {
        return $this->shippingAddress2;
    }

    /**
     * Set shippingCity
     *
     ** @param string $shippingCity
     ** @return CustomerMain
     */
    public function setShippingCity($shippingCity)
    {
        $this->shippingCity = $shippingCity;

        return $this;
    }

    /**
     * Get shippingCity
     *
     ** @return string
     */
    public function getShippingCity()
    {
        return $this->shippingCity;
    }

    /**
     * Set shippingZipcode
     *
     ** @param string $shippingZipcode
     ** @return CustomerMain
     */
    public function setShippingZipcode($shippingZipcode)
    {
        $this->shippingZipcode = $shippingZipcode;

        return $this;
    }

    /**
     * Get shippingZipcode
     *
     ** @return string
     */
    public function getShippingZipcode()
    {
        return $this->shippingZipcode;
    }

    /**
     * Set jointBuyersFirstName
     *
     ** @param string $jointBuyersFirstName
     ** @return CustomerMain
     */
    public function setJointBuyersFirstName($jointBuyersFirstName)
    {
        $this->jointBuyersFirstName = $jointBuyersFirstName;

        return $this;
    }

    /**
     * Get jointBuyersFirstName
     *
     ** @return string
     */
    public function getJointBuyersFirstName()
    {
        return $this->jointBuyersFirstName;
    }

    /**
     * Set jointBuyersLastName
     *
     ** @param string $jointBuyersLastName
     ** @return CustomerMain
     */
    public function setJointBuyersLastName($jointBuyersLastName)
    {
        $this->jointBuyersLastName = $jointBuyersLastName;

        return $this;
    }

    /**
     * Get jointBuyersLastName
     *
     ** @return string
     */
    public function getJointBuyersLastName()
    {
        return $this->jointBuyersLastName;
    }

    /**
     * Set jointBuyersSsn
     *
     ** @param string $jointBuyersSsn
     ** @return CustomerMain
     */
    public function setJointBuyersSsn($jointBuyersSsn)
    {
        $this->jointBuyersSsn = $jointBuyersSsn;

        return $this;
    }

    /**
     * Get jointBuyersSsn
     *
     ** @return string
     */
    public function getJointBuyersSsn()
    {
        return $this->jointBuyersSsn;
    }

    /**
     * Set kidsAgeFrom
     *
     ** @param integer $kidsAgeFrom
     ** @return CustomerMain
     */
    public function setKidsAgeFrom($kidsAgeFrom)
    {
        $this->kidsAgeFrom = $kidsAgeFrom;

        return $this;
    }

    /**
     * Get kidsAgeFrom
     *
     ** @return integer
     */
    public function getKidsAgeFrom()
    {
        return $this->kidsAgeFrom;
    }

    /**
     * Set kidsAgeTo
     *
     ** @param integer $kidsAgeTo
     ** @return CustomerMain
     */
    public function setKidsAgeTo($kidsAgeTo)
    {
        $this->kidsAgeTo = $kidsAgeTo;

        return $this;
    }

    /**
     * Get kidsAgeTo
     *
     ** @return integer
     */
    public function getKidsAgeTo()
    {
        return $this->kidsAgeTo;
    }

    /**
     * Set createDate
     *
     ** @param \DateTime $createDate
     ** @return CustomerMain
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
     ** @return CustomerMain
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
     ** @return CustomerMain
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
     ** @return CustomerMain
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
     * Set ageYoungestChild
     *
     ** @param integer $ageYoungestChild
     ** @return CustomerMain
     */
    public function setAgeYoungestChild($ageYoungestChild)
    {
        $this->ageYoungestChild = $ageYoungestChild;

        return $this;
    }

    /**
     * Get ageYoungestChild
     *
     ** @return integer
     */
    public function getAgeYoungestChild()
    {
        return $this->ageYoungestChild;
    }

    /**
     * Set numberOfChildren
     *
     ** @param integer $numberOfChildren
     ** @return CustomerMain
     */
    public function setNumberOfChildren($numberOfChildren)
    {
        $this->numberOfChildren = $numberOfChildren;

        return $this;
    }

    /**
     * Get numberOfChildren
     *
     ** @return integer
     */
    public function getNumberOfChildren()
    {
        return $this->numberOfChildren;
    }

    /**
     * Set notLds
     *
     ** @param string $notLds
     ** @return CustomerMain
     */
    public function setNotLds($notLds)
    {
        $this->notLds = $notLds;

        return $this;
    }

    /**
     * Get notLds
     *
     ** @return string
     */
    public function getNotLds()
    {
        return $this->notLds;
    }

    /**
     * Set annualIncome
     *
     ** @param \AnnualIncome $annualIncome
     ** @return CustomerMain
     */
    public function setAnnualIncome(\LSI\SystemBundle\Entity\AnnualIncome $annualIncome = null)
    {
        $this->annualIncome = $annualIncome;

        return $this;
    }

    /**
     * Get annualIncome
     *
     ** @return \AnnualIncome
     */
    public function getAnnualIncome()
    {
        return $this->annualIncome;
    }

    /**
     * Set billingStateProv
     *
     ** @param \StateProv $billingStateProv
     ** @return CustomerMain
     */
    public function setBillingStateProv(\LSI\SystemBundle\Entity\StateProv $billingStateProv = null)
    {
        $this->billingStateProv = $billingStateProv;

        return $this;
    }

    /**
     * Get billingStateProv
     *
     ** @return \StateProv
     */
    public function getBillingStateProv()
    {
        return $this->billingStateProv;
    }

    /**
     * Set shippingStateProv
     *
     ** @param \StateProv $shippingStateProv
     ** @return CustomerMain
     */
    public function setShippingStateProv(\LSI\SystemBundle\Entity\StateProv $shippingStateProv = null)
    {
        $this->shippingStateProv = $shippingStateProv;

        return $this;
    }

    /**
     * Get shippingStateProv
     *
     ** @return \StateProv
     */
    public function getShippingStateProv()
    {
        return $this->shippingStateProv;
    }
}
