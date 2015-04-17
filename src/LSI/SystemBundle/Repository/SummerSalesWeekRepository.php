<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class SummerSalesWeekRepository extends EntityRepository
{
    public function get_program_weeks($sales_program_type){
        $currentYear = new \DateTime();
        $qb = $this->_em->createQueryBuilder();
        $qb->select('ssw')
                ->from('LSI\SystemBundle\Entity\SummerSalesWeek','ssw')
                ->where('ssw.salesProgramType = :program_type')
                ->andWhere('YEAR( ssw.summerSalesWeekStartDate ) = :year')
                ->setParameter('program_type', $sales_program_type)
                ->setParameter('year', $currentYear->format('Y'))
                ->orderBy('ssw.summerSalesWeekStartDate','ASC');
        $programWeeks = array();
        $i=1; // start at week 1 not week 0
        foreach($qb->getQuery()->getResult() as $week){
            $programWeeks[$i] = $week->getSummerSalesWeekStartDate();
            $i++;
        }
        return $programWeeks;
    }
}