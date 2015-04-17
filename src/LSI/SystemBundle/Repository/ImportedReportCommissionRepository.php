<?php
namespace LSI\SystemBundle\Repository;

use Doctrine\ORM\EntityRepository;

class ImportedReportCommissionRepository extends EntityRepository
{
    public function get_commissions_for_user_by_week_in_year($user, $year)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('irc')
                ->from('LSI\SystemBundle\Entity\ImportedReportCommission','irc')
                ->where('irc.slsmNo = :user')
                ->andWhere('YEAR(irc.date) = :year')
                ->orderBy('irc.week')
                ->addOrderBy('irc.orderDate')
                ->setParameter('user', $user)
                ->setParameter('year', $year);
        $commissions = $qb->getQuery()->getResult();
        $ordersForAllWeeks = array();
        //hack the uf payments to match the layout they want.
        foreach($commissions as $commission){
            if($commission->getProduct() == 'UPFRONT PAYMENT'){
                $commission->setOrderDate($commission->getDate());
                $commission->setOrderNo('');
                $commission->setUpgrades('');
                $commission->setDvds('');
                $commission->setParcels('');
                $commission->setStatus('UF PAYMENT');
            }
            $ordersForAllWeeks[$commission->getWeek()][] = $commission;
        }
        ksort($ordersForAllWeeks);
        return $ordersForAllWeeks;
    }

    public function get_unique_statuses()
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('COUNT(irc.status) as num_statuses,COUNT(irc.sets) as total_sets,irc.status')
            ->from('LSI\SystemBundle\Entity\ImportedReportCommission','irc')
            ->groupBy('irc.status')
            ->orderBy('irc.status','ASC');
        return $qb->getQuery()->getResult();
    }

    public function get_sets_report_for_user_for_year($userid, $year, $ordersBeforeThisDate)
    {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('SUM(irc.sets) as sets, irc.status')
            ->from('LSI\SystemBundle\Entity\ImportedReportCommission','irc')
            ->where('irc.slsmNo = :userid')
            ->andWhere('YEAR(irc.orderDate) = :year')
            ->andWhere("irc.repNameCode = ''")
            ->andWhere('irc.date < :wednesday')
            ->groupBy('irc.status')
            ->setParameter('userid', $userid)
            ->setParameter('year', $year)
            ->setParameter('wednesday', $ordersBeforeThisDate);
        $results = $qb->getQuery()->getResult();
        $sets = array(
            'CANCELED_NN' => 0.00,
            'CANCELED_PN' => 0.00,
            'CANCELED_PP' => 0.00,
            'ENTERED' => 0.00,
            'ENTERED_CAN' => 0.00,
            'POSTDATE' => 0.00,
            'PROCESSED' => 0.00,
            'PROCESSED_CAN' => 0.00,
            'UF_PAID_CAN' => 0.00,
            'UF_PAYMENT' => 0.00,
            'UPFRONT_PAID' => 0.00,
            'OTHER' => 0.00,
            'PROCESSED_CREDIT' => 0.00
        );
        foreach($results as $result){
            $sets[str_replace('/','_',str_replace(' ', '_', $result['status']))] += $result['sets'];
        }
        return $sets;
    }

    public function get_processed_sets_for_user_from_year($userid,$year){
        $sets = $this->get_sets_report_for_user_for_year($userid, $year, new \DateTime());
        $processedSets = $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['CANCELED_PP'] + $sets['PROCESSED_CREDIT'];
        return $processedSets;
    }
}