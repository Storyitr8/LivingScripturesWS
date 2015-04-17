<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class UserTeamRepository extends EntityRepository
{
    public function get_years()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('ut.teamYear')
            ->from('LSI\SystemBundle\Entity\UserTeam', 'ut')
            ->groupBy('ut.teamYear');
        $teamYears = $qb->getQuery()->getResult();
        foreach($teamYears as $year){
            $years[] = $year['teamYear'];
        }
        rsort($years);
        return $years;
    }

    public function get_team_members_slsmno_form_team($teamid)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('um')
            ->from('LSI\SystemBundle\Entity\UserMain', 'um')
            ->join('um.userTeam','ut')
            ->where('ut.userTeamId = :teamid')
            ->setParameter('teamid', $teamid);
        $results = $qb->getQuery()->getResult();
        $slsmnos = array();
        foreach($results as $result){
            $slsmnos[] = $result->getSlsmNo();
        }
        return $slsmnos;
    }

    public function get_active_team($userid)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('ut')
            ->from('LSI\SystemBundle\Entity\UserTeam','ut')
            ->leftJoin('ut.userid', 'um')
            ->where('um.userid = :userid')
            ->andWhere("ut.activeStatus = 'A'")
            ->setParameter('userid',$userid)
            ->setMaxResults(1);
        return $qb->getQuery()->getOneOrNullResult();
    }

    public function is_member_of_team($userid, $teamid)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('ut')
            ->from('LSI\SystemBundle\Entity\UserTeam','ut')
            ->leftJoin('ut.userid', 'um')
            ->where('um.userid = :userid')
            ->andWhere("ut.userTeamId = :teamid")
            ->setParameter('userid',$userid)
            ->setParameter('teamid',$teamid)
            ->setMaxResults(1);
        $result = $qb->getQuery()->getOneOrNullResult();
        if($result == NULL){
            return false;
        }
        return true;
    }
}