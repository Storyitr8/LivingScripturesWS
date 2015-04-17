<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImportedReportBonusRepository extends EntityRepository
{
    public function get_user_bonuses_by_category_from_year($userid,$year)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('irb')
                ->from('LSI\SystemBundle\Entity\ImportedReportBonus','irb')
                ->where('irb.slsmNo = :userid')
                ->andWhere('YEAR(irb.date) = :year')
                ->orderBy('irb.date','ASC')
                ->setParameter('userid', $userid)
                ->setParameter('year', $year);
        $results = $qb->getQuery()->getResult();
        $bonuses = array();
        foreach($results as $result){
            $bonuses[$result->getCategory()][] = $result;
        }
        ksort($bonuses);
        return $bonuses;
    }
}