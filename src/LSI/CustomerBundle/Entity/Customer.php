<?php
namespace LSI\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(indexes={@ORM\Index(name="customer_number_idx", columns={"customer_number"})})
 */
class Customer
{
     /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer")
     */
    protected $customer_number;

    /**
     * @ORM\Column(type="integer")
     */
    protected $nf_number;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address_1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address_2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $city;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $state;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $zip;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ship_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $billing_address_1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $billing_address_2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $billing_city;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $billing_state;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $billing_zip;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $ssn;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    protected $date_of_birth;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $phone;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $alt_phone;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $joint_buyer_first_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $joint_buyer_last_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $joint_buyer_ssn;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $employer;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $income;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $number_of_children;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    protected $youngest_child_age;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    protected $email_opt_in;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_address_1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_address_2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_city;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_state;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_zip;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $relative_phone;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $religion;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    public function getAddress1()
    {
        return $this->address_1;
    }

    public function setAddress1($address_1)
    {
        $this->address_1 = $address_1;
        return $this;
    }

    public function getAddress2()
    {
        return $this->address_2;
    }

    public function setAddress2($address_2)
    {
        $this->address_2 = $address_2;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getState()
    {
        return $this->state;
    }

    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    public function getZip()
    {
        return $this->zip;
    }

    public function setZip($zip)
    {
        $this->zip = $zip;
        return $this;
    }

    public function getShipName()
    {
        return $this->ship_name;
    }

    public function setShipName($ship_name)
    {
        $this->ship_name = $ship_name;
        return $this;
    }

    public function getBillingAddress1()
    {
        return $this->billing_address_1;
    }

    public function setBillingAddress1($billing_address_1)
    {
        $this->billing_address_1 = $billing_address_1;
        return $this;
    }

    public function getBillingAddress2()
    {
        return $this->billing_address_2;
    }

    public function setBillingAddress2($billing_address_2)
    {
        $this->billing_address_2 = $billing_address_2;
        return $this;
    }

    public function getBillingCity()
    {
        return $this->billing_city;
    }

    public function setBillingCity($billing_city)
    {
        $this->billing_city = $billing_city;
        return $this;
    }

    public function getBillingState()
    {
        return $this->billing_state;
    }

    public function setBillingState($billing_state)
    {
        $this->billing_state = $billing_state;
        return $this;
    }

    public function getBillingZip()
    {
        return $this->billing_zip;
    }

    public function setBillingZip($billing_zip)
    {
        $this->billing_zip = $billing_zip;
        return $this;
    }

    public function getSsn()
    {
        return $this->ssn;
    }

    public function setSsn($ssn)
    {
        $this->ssn = $ssn;
        return $this;
    }

    public function getDateOfBirth()
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth($date_of_birth)
    {
        $this->date_of_birth = $date_of_birth;
        return $this;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    public function getAltPhone()
    {
        return $this->alt_phone;
    }

    public function setAltPhone($alt_phone)
    {
        $this->alt_phone = $alt_phone;
        return $this;
    }

    public function getJointBuyerFirstName()
    {
        return $this->joint_buyer_first_name;
    }

    public function setJointBuyerFirstName($joint_buyer_first_name)
    {
        $this->joint_buyer_first_name = $joint_buyer_first_name;
        return $this;
    }

    public function getJointBuyerLastName()
    {
        return $this->joint_buyer_last_name;
    }

    public function setJointBuyerLastName($joint_buyer_last_name)
    {
        $this->joint_buyer_last_name = $joint_buyer_last_name;
        return $this;
    }

    public function getJointBuyerSsn()
    {
        return $this->joint_buyer_ssn;
    }

    public function setJointBuyerSsn($joint_buyer_ssn)
    {
        $this->joint_buyer_ssn = $joint_buyer_ssn;
        return $this;
    }

    public function getEmployer()
    {
        return $this->employer;
    }

    public function setEmployer($employer)
    {
        $this->employer = $employer;
        return $this;
    }

    public function getIncome()
    {
        return $this->income;
    }

    public function setIncome($income)
    {
        $this->income = $income;
        return $this;
    }

    public function getNumberOfChildren()
    {
        return $this->number_of_children;
    }

    public function setNumberOfChildren($number_of_children)
    {
        $this->number_of_children = $number_of_children;
        return $this;
    }

    public function getYoungestChildAge()
    {
        return $this->youngest_child_age;
    }

    public function setYoungestChildAge($youngest_child_age)
    {
        $this->youngest_child_age = $youngest_child_age;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getEmailOptIn()
    {
        return $this->email_opt_in;
    }

    public function setEmailOptIn($email_opt_in)
    {
        $this->email_opt_in = $email_opt_in;
        return $this;
    }

    public function getRelativeName()
    {
        return $this->relative_name;
    }

    public function setRelativeName($relative_name)
    {
        $this->relative_name = $relative_name;
        return $this;
    }

    public function getRelativeAddress1()
    {
        return $this->relative_address_1;
    }

    public function setRelativeAddress1($relative_address_1)
    {
        $this->relative_address_1 = $relative_address_1;
        return $this;
    }

    public function getRelativeAddress2()
    {
        return $this->relative_address_2;
    }

    public function setRelativeAddress2($relative_address_2)
    {
        $this->relative_address_2 = $relative_address_2;
        return $this;
    }

    public function getRelativeCity()
    {
        return $this->relative_city;
    }

    public function setRelativeCity($relative_city)
    {
        $this->relative_city = $relative_city;
        return $this;
    }

    public function getRelativeState()
    {
        return $this->relative_state;
    }

    public function setRelativeState($relative_state)
    {
        $this->relative_state = $relative_state;
        return $this;
    }

    public function getRelativeZip()
    {
        return $this->relative_zip;
    }

    public function setRelativeZip($relative_zip)
    {
        $this->relative_zip = $relative_zip;
        return $this;
    }

    public function getRelativePhone()
    {
        return $this->relative_phone;
    }

    public function setRelativePhone($relative_phone)
    {
        $this->relative_phone = $relative_phone;
        return $this;
    }

    public function getReligion()
    {
        return $this->religion;
    }

    public function setReligion($religion)
    {
        $this->religion = $religion;
        return $this;
    }

    public function getCustomerNumber()
    {
        return $this->customer_number;
    }

    public function setCustomerNumber($customer_number)
    {
        $this->customer_number = $customer_number;
        return $this;
    }

    public function getNfNumber()
    {
        return $this->nf_number;
    }

    public function setNfNumber($nf_number)
    {
        $this->nf_number = $nf_number;
        return $this;
    }

}