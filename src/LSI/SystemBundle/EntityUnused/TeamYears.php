<?php

namespace LSI\SystemBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeamYears
 *
 * @ORM\Table(name="team_years")
 * @ORM\Entity
 */
class TeamYears
{
    /**
     * @var integer
     *
     * @ORM\Column(name="user_team_id", type="integer", nullable=true)
     */
    private $userTeamId;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_year", type="integer", nullable=true)
     */
    private $teamYear;

    /**
     * @var integer
     *
     * @ORM\Column(name="team_year_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $teamYearId;



    /**
     * Set userTeamId
     *
     * @param integer $userTeamId
     * @return TeamYears
     */
    public function setUserTeamId($userTeamId)
    {
        $this->userTeamId = $userTeamId;

        return $this;
    }

    /**
     * Get userTeamId
     *
     * @return integer 
     */
    public function getUserTeamId()
    {
        return $this->userTeamId;
    }

    /**
     * Set teamYear
     *
     * @param integer $teamYear
     * @return TeamYears
     */
    public function setTeamYear($teamYear)
    {
        $this->teamYear = $teamYear;

        return $this;
    }

    /**
     * Get teamYear
     *
     * @return integer 
     */
    public function getTeamYear()
    {
        return $this->teamYear;
    }

    /**
     * Get teamYearId
     *
     * @return integer 
     */
    public function getTeamYearId()
    {
        return $this->teamYearId;
    }
}
