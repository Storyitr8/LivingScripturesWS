<?php
namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserReferred
 *
 ** @ORM\Table(name="user_referred")
 ** @ORM\Entity
 */
class UserReferred
{
    /**
     *** @var integer
     *
     ** @ORM\Column(name="userref_id", type="integer", nullable=false)
     ** @ORM\Id
     ** @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $userrefId;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="userid", type="integer", nullable=false)
     */
    private $userid;

    /**
     *** @var integer
     *
     ** @ORM\Column(name="ref_userid", type="integer", nullable=true)
     */
    private $refUserid;

    /**
     *** @var string
     *
     ** @ORM\Column(name="ref_name", type="string", length=255, nullable=true)
     */
    private $refName;

    /**
     *** @var string
     *
     ** @ORM\Column(name="ref_address", type="string", length=255, nullable=true)
     */
    private $refAddress;

    /**
     *** @var string
     *
     ** @ORM\Column(name="ref_email", type="string", length=255, nullable=true)
     */
    private $refEmail;


    /**
     * Get userrefId
     *
     ** @return integer
     */
    public function getUserrefId()
    {
        return $this->userrefId;
    }

    /**
     * Set userid
     *
     ** @param integer $userid
     ** @return UserReferred
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;

        return $this;
    }

    /**
     * Get userid
     *
     ** @return integer
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set refUserid
     *
     ** @param integer $refUserid
     ** @return UserReferred
     */
    public function setRefUserid($refUserid)
    {
        $this->refUserid = $refUserid;

        return $this;
    }

    /**
     * Get refUserid
     *
     ** @return integer
     */
    public function getRefUserid()
    {
        return $this->refUserid;
    }

    /**
     * Set refName
     *
     ** @param string $refName
     ** @return UserReferred
     */
    public function setRefName($refName)
    {
        $this->refName = $refName;

        return $this;
    }

    /**
     * Get refName
     *
     ** @return string
     */
    public function getRefName()
    {
        return $this->refName;
    }

    /**
     * Set refAddress
     *
     ** @param string $refAddress
     ** @return UserReferred
     */
    public function setRefAddress($refAddress)
    {
        $this->refAddress = $refAddress;

        return $this;
    }

    /**
     * Get refAddress
     *
     ** @return string
     */
    public function getRefAddress()
    {
        return $this->refAddress;
    }

    /**
     * Set refEmail
     *
     ** @param string $refEmail
     ** @return UserReferred
     */
    public function setRefEmail($refEmail)
    {
        $this->refEmail = $refEmail;

        return $this;
    }

    /**
     * Get refEmail
     *
     ** @return string
     */
    public function getRefEmail()
    {
        return $this->refEmail;
    }
}
