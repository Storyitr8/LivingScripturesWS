<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImportedReportChecksRepository extends EntityRepository
{
    public function get_checks_for_user_by_year($userid,$year)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('irc')
            ->from('LSI\SystemBundle\Entity\ImportedReportChecks', 'irc')
            ->where('irc.slsmNo = :userid')
            ->andWhere('YEAR(irc.date) = :year')
            ->setParameter('userid', $userid)
            ->setParameter('year', $year);
        return $qb->getQuery()->getResult();
    }

}