<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImportedReportExpenseRepository extends EntityRepository
{
    public function get_user_expenses_by_category_from_year($userid, $year)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('ire')
                ->from('LSI\SystemBundle\Entity\ImportedReportExpense','ire')
                ->where('ire.slsmNo = :userid')
                ->andWhere('YEAR(ire.date) = :year')
                ->orderBy('ire.date','ASC')
                ->setParameter('userid', $userid)
                ->setParameter('year', $year);
        $results = $qb->getQuery()->getResult();
        $expenses = array();
        foreach($results as $result){
            $expenses[$result->getCategory()][] = $result;
        }
        ksort($expenses);
        return $expenses;
    }
}