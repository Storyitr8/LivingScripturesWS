<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Referrals
 *
 ** @ORM\Table(name="referrals")
 ** @ORM\Entity
 */
class Referrals
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="referral_id", type="bigint", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $referralId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="admin_id", type="bigint", nullable=true)
     */
    private $adminId;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referror_name", type="string", length=255, nullable=true)
     */
    private $referrorName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referror_email", type="string", length=255, nullable=true)
     */
    private $referrorEmail;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referror_address", type="string", length=255, nullable=true)
     */
    private $referrorAddress;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referral_name", type="string", length=255, nullable=true)
     */
    private $referralName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referral_phone", type="string", length=255, nullable=true)
     */
    private $referralPhone;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="referral_status", type="smallint", nullable=true)
     */
    private $referralStatus;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="referral_rank", type="smallint", nullable=true)
     */
    private $referralRank;

    /**
     *** @var \DateTime
     *
     ** @ORM\Column(name="referral_contact_date", type="date", nullable=true)
     */
    private $referralContactDate;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referral_notes", type="text", nullable=true)
     */
    private $referralNotes;

    /**
     *** @var string
     *
     ** @ORM\Column(name="referral_relationship", type="string", length=255, nullable=true)
     */
    private $referralRelationship;


    /**
     * Get referralId
     *
     ** @return integer
     */
    public function getReferralId()
    {
        return $this->referralId;
    }

    /**
     * Set adminId
     *
     ** @param integer $adminId
     ** @return Referrals
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;

        return $this;
    }

    /**
     * Get adminId
     *
     ** @return integer
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * Set referrorName
     *
     ** @param string $referrorName
     ** @return Referrals
     */
    public function setReferrorName($referrorName)
    {
        $this->referrorName = $referrorName;

        return $this;
    }

    /**
     * Get referrorName
     *
     ** @return string
     */
    public function getReferrorName()
    {
        return $this->referrorName;
    }

    /**
     * Set referrorEmail
     *
     ** @param string $referrorEmail
     ** @return Referrals
     */
    public function setReferrorEmail($referrorEmail)
    {
        $this->referrorEmail = $referrorEmail;

        return $this;
    }

    /**
     * Get referrorEmail
     *
     ** @return string
     */
    public function getReferrorEmail()
    {
        return $this->referrorEmail;
    }

    /**
     * Set referrorAddress
     *
     ** @param string $referrorAddress
     ** @return Referrals
     */
    public function setReferrorAddress($referrorAddress)
    {
        $this->referrorAddress = $referrorAddress;

        return $this;
    }

    /**
     * Get referrorAddress
     *
     ** @return string
     */
    public function getReferrorAddress()
    {
        return $this->referrorAddress;
    }

    /**
     * Set referralName
     *
     ** @param string $referralName
     ** @return Referrals
     */
    public function setReferralName($referralName)
    {
        $this->referralName = $referralName;

        return $this;
    }

    /**
     * Get referralName
     *
     ** @return string
     */
    public function getReferralName()
    {
        return $this->referralName;
    }

    /**
     * Set referralPhone
     *
     ** @param string $referralPhone
     ** @return Referrals
     */
    public function setReferralPhone($referralPhone)
    {
        $this->referralPhone = $referralPhone;

        return $this;
    }

    /**
     * Get referralPhone
     *
     ** @return string
     */
    public function getReferralPhone()
    {
        return $this->referralPhone;
    }

    /**
     * Set referralStatus
     *
     ** @param integer $referralStatus
     ** @return Referrals
     */
    public function setReferralStatus($referralStatus)
    {
        $this->referralStatus = $referralStatus;

        return $this;
    }

    /**
     * Get referralStatus
     *
     ** @return integer
     */
    public function getReferralStatus()
    {
        return $this->referralStatus;
    }

    /**
     * Set referralRank
     *
     ** @param integer $referralRank
     ** @return Referrals
     */
    public function setReferralRank($referralRank)
    {
        $this->referralRank = $referralRank;

        return $this;
    }

    /**
     * Get referralRank
     *
     ** @return integer
     */
    public function getReferralRank()
    {
        return $this->referralRank;
    }

    /**
     * Set referralContactDate
     *
     ** @param \DateTime $referralContactDate
     ** @return Referrals
     */
    public function setReferralContactDate($referralContactDate)
    {
        $this->referralContactDate = $referralContactDate;

        return $this;
    }

    /**
     * Get referralContactDate
     *
     ** @return \DateTime
     */
    public function getReferralContactDate()
    {
        return $this->referralContactDate;
    }

    /**
     * Set referralNotes
     *
     ** @param string $referralNotes
     ** @return Referrals
     */
    public function setReferralNotes($referralNotes)
    {
        $this->referralNotes = $referralNotes;

        return $this;
    }

    /**
     * Get referralNotes
     *
     ** @return string
     */
    public function getReferralNotes()
    {
        return $this->referralNotes;
    }

    /**
     * Set referralRelationship
     *
     ** @param string $referralRelationship
     ** @return Referrals
     */
    public function setReferralRelationship($referralRelationship)
    {
        $this->referralRelationship = $referralRelationship;

        return $this;
    }

    /**
     * Get referralRelationship
     *
     ** @return string
     */
    public function getReferralRelationship()
    {
        return $this->referralRelationship;
    }
}
