<?php

namespace LSI\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="integer", unique=true)
     */
    protected $slsm_no;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $first_name;

    /**
     * @ORM\Column(type="string")
     */
    protected $last_name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $email;

    /**
     * @ORM\Column(type="string")
     */
    protected $address;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $address2;

    /**
     * @ORM\Column(type="string")
     */
    protected $city;

    /**
     * @ORM\Column(type="string")
     */
    protected $state;

    /**
     * @ORM\Column(type="string")
     */
    protected $zip;

    /**
     * @ORM\ManyToOne(targetEntity="Team", inversedBy="users")
     * @ORM\JoinColumn(name="team", referencedColumnName="id", nullable=true)
     */
    protected $team;

    /**
     * @ORM\ManyToOne(targetEntity="Department", inversedBy="users")
     * @ORM\JoinColumn(name="department", referencedColumnName="id", nullable=true)
     */
    protected $department;

    /**
     * @ORM\Column(type="string")
     */
    protected $roles;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $is_active;

    /**
     * @ORM\Column(type="string")
     */
    protected $password;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    protected $salt;

    /**
     * @ORM\OneToMany(targetEntity="LSI\CommissionBundle\Entity\SalesmanBonus", mappedBy="user")
     */
    protected $bonuses;

    /**
     * @ORM\OneToMany(targetEntity="LSI\CommissionBundle\Entity\SalesmanCheck", mappedBy="user")
     */
    protected $checks;

    /**
     * @ORM\OneToMany(targetEntity="LSI\CommissionBundle\Entity\SalesmanCommission", mappedBy="user")
     */
    protected $commissions;

    /**
     * @ORM\OneToMany(targetEntity="LSI\CommissionBundle\Entity\SalesmanExpense", mappedBy="user")
     */
    protected $expenses;

    public function __construct()
    {
        $this->is_active = false;
        $this->roles = 'ROLE_USER';
    }

    public function serialize()
    {
        return serialize(array(
            $this->id,
            $this->slsm_no,
            $this->password
        ));
    }

    public function unserialize($serialized)
    {
        list(
            $this->id,
            $this->slsm_no,
            $this->password
        ) = unserialize($serialized);
    }

    public function getUsername()
    {
        return $this->slsm_no;
    }

    public function eraseCredentials(){}

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getSlsmNo()
    {
        return $this->slsm_no;
    }

    public function setSlsmNo($slsm_no)
    {
        $this->slsm_no = $slsm_no;
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;
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

    public function getTeam()
    {
        return $this->team;
    }

    public function setTeam($team)
    {
        $this->team = $team;
        return $this;
    }

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    public function getRoles()
    {
        return array($this->roles);
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;
        return $this;
    }

    public function getIsActive()
    {
        return $this->is_active;
    }

    public function setIsActive($is_active)
    {
        $this->is_active = $is_active;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    public function getSalt()
    {
        return $this->salt;
    }

    public function setSalt($salt)
    {
        $this->salt = $salt;
        return $this;
    }

    public function getBonuses()
    {
        return $this->bonuses;
    }

    public function setBonuses($bonuses)
    {
        $this->bonuses = $bonuses;
        return $this;
    }

    public function getChecks()
    {
        return $this->checks;
    }

    public function setChecks($checks)
    {
        $this->checks = $checks;
        return $this;
    }

    public function getCommissions()
    {
        return $this->commissions;
    }

    public function setCommissions($commissions)
    {
        $this->commissions = $commissions;
        return $this;
    }

    public function getExpenses()
    {
        return $this->expenses;
    }

    public function setExpenses($expenses)
    {
        $this->expenses = $expenses;
        return $this;
    }
}