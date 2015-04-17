<?php
namespace LSI\SystemBundle\Repository;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\NoResultException;

class UserMainRepository extends EntityRepository implements UserProviderInterface {

    public function loadUserByUsername($username)
    {
        $q = $this
            ->createQueryBuilder('u')
            ->where('u.username = :username OR u.slsmNo = :slsmNo')
            ->setParameter('username', $username)
            ->setParameter('slsmNo', $username)
            ->getQuery();
        try {
            // The Query::getSingleResult() method throws an exception
            // if there is no record matching the criteria.
            $user = $q->getSingleResult();
        } catch (NoResultException $e) {
            $message = sprintf(
                'Unable to find an active user identified by "%s".',
                $username
            );
            throw new UsernameNotFoundException($message, 0, $e);
        }

        return $user;
    }

    public function refreshUser(UserInterface $user)
    {
        $class = get_class($user);
        if (!$this->supportsClass($class)) {
            throw new UnsupportedUserException(
                sprintf(
                    'Instances of "%s" are not supported.',
                    $class
                )
            );
        }

        return $this->find($user->getUserid());
    }

    public function supportsClass($class)
    {
        return $this->getEntityName() === $class
        || is_subclass_of($class, $this->getEntityName());
    }

    public function get_number_of_dvds_left_with_customers_by_type($userid, $product_main_id, $start_date, $end_date) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('SUM(od.quantity) as dvds_left')
                ->from('LSI\SystemBundle\Entity\OrderDetail', 'od')
                ->innerJoin('od.orderMain', 'om')
                ->join('od.productMain', 'pm')
                ->where('od.leftWithCustomer = 1')
                ->andWhere('om.createDate >= :start')
                ->andWhere('om.createDate <= :end')
                ->andWhere('om.userid = :userid')
                ->andWhere('pm.productMainId = :productMainId')
                ->setParameter('start', $start_date)
                ->setParameter('end', $end_date)
                ->setParameter('userid', $userid)
                ->setParameter('productMainId', $product_main_id);
        $dvdsLeftArray = $qb->getQuery()->getResult();
        if (!empty($dvdsLeftArray)) {
            if (array_key_exists('dvds_left', $dvdsLeftArray[0])) {
                if ($dvdsLeftArray[0]['dvds_left'] == NULL) {
                    return (int) 0;
                }
                return (int) $dvdsLeftArray[0]['dvds_left'];
            }
        }
        return (int) 0;
    }

    public function get_users_by_status_for_year($status, $year) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('LSI\SystemBundle\Entity\UserMain', 'u')
                ->join('u.userStatus', 'us')
                ->join('u.userTeam', 'ut')
                ->where('us.userStatus = :status')
                ->andWhere('ut.teamYear = :year')
                ->setParameter('year', $year)
                ->setParameter('status', $status);

        return $qb->getQuery()->getResult();
    }

    public function get_active_users_for_year_from_program($year, $program) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('LSI\SystemBundle\Entity\UserMain', 'u')
                ->join('u.userStatus', 'us')
                ->join('u.userTeam', 'ut')
                ->where('us.userStatus = :status')
                ->andWhere('ut.teamYear = :year')
                ->andWhere('u.salesProgramType = :program')
                ->orderBy('u.lastName')
                ->addOrderBy('u.firstName')
                ->setParameter('status', 'A')
                ->setParameter('program', $program)
                ->setParameter('year', $year);

        return $qb->getQuery()->getResult();
    }

    public function get_active_team_users_for_year_from_program($year, $program, $teamid) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('LSI\SystemBundle\Entity\UserMain', 'u')
                ->join('u.userStatus', 'us')
                ->join('u.userTeam', 'ut')
                ->where('us.userStatus = :status')
                ->andWhere('ut.userTeamId = :teamid')
                ->andWhere('ut.teamYear = :year')
                ->andWhere('u.salesProgramType = :program')
                ->orderBy('u.lastName')
                ->addOrderBy('u.firstName')
                ->setParameter('teamid', $teamid)
                ->setParameter('status', 'A')
                ->setParameter('program', $program)
                ->setParameter('year', $year);

        return $qb->getQuery()->getResult();
    }

    public function get_all_users_for_year_from_program($year, $program) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('LSI\SystemBundle\Entity\UserMain', 'u')
                ->join('u.userTeam', 'ut')
                ->where('ut.teamYear = :year')
                ->andWhere('u.salesProgramType = :program')
                ->orderBy('u.lastName')
                ->addOrderBy('u.firstName')
                ->setParameter('program', $program)
                ->setParameter('year', $year);

        return $qb->getQuery()->getResult();
    }

    public function get_team_users_for_year_from_program($year, $program, $teamid) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('u')
                ->from('LSI\SystemBundle\Entity\UserMain', 'u')
                ->join('u.userTeam', 'ut')
                ->where('ut.teamYear = :year')
                ->andWhere('ut.userTeamId = :teamid')
                ->andWhere('u.salesProgramType = :program')
                ->orderBy('u.lastName')
                ->addOrderBy('u.firstName')
                ->setParameter('teamid', $teamid)
                ->setParameter('program', $program)
                ->setParameter('year', $year);

        return $qb->getQuery()->getResult();
    }

    public function get_orders_by_week_for_user($userid, $username) {
        $program = $this->get_user_program($userid);
        $weeks = $program->getSummerSalesWeeks();
        #var_dump($weeks->toArray()); die;
        $qb = $this->_em->createQueryBuilder();
        $qb->select('om')
                ->from('LSI\SystemBundle\Entity\OrderMain', 'om')
                //->join('om.orderDetail','od')
                ->where('om.userid = :userid')
                ->orderBy('om.orderDate', 'ASC')
                ->setParameter('userid', $userid);
        //var_dump($qb->getQuery());
        $ordersForUser = $qb->getQuery()->getResult();
        var_dump($program->getSalesProgramType());

        $weekstart = $weekend = null;
        $i = 0;
        $ordersByWeek = array();
        foreach ($weeks as $week) {
            if ($week->getSummerSalesWeekStartDate()->format('Y') == date('Y')) {
                if ($weekstart == null) {
                    $weekstart = $week->getSummerSalesWeekStartDate();
                    continue;
                } elseif ($weekend == null) {
                    $weekend = $week->getSummerSalesWeekStartDate();
                } else {
                    $weekstart = $weekend;
                    $weekend = $week->getSummerSalesWeekStartDate();
                }
                echo 'WEEK[' . $i . ']: ';
                var_dump($weekstart->format('m/d/Y'));
                echo ' - ';
                var_dump($weekend->format('m/d/Y'));
                echo '<br />';
                foreach ($ordersForUser as $order) {
//                    if($order->getOrderDate() >= $weekstart && $order->getOrderDate() < $weekend){
//                        $ordersByWeek[$i][] =  $order->getOrderDate()->format('m/d/Y');
//                    }
//                    elseif($order->getCancellationPostdate()!= null && $order->getCancellationPostdate() >= $weekstart && $order->getCancellationPostdate() < $weekend){
//                        $ordersByWeek[$i][] =  $order->getCancellationPostdate()->format('m/d/Y');
//                    }
                    echo 'Status ' . $order->getOrderStatus()->getOrderStatusDesc() . '<br />';
//                    elseif($order->getUpdateDate()!= null && $order->getOrderDate()->format('m/d/Y') != $order->getUpdateDate()->format('m/d/Y')){
//                        echo 'Ordered on ' . $order->getOrderDate()->format('m/d/Y') . ' Updated on '.$order->getUpdateDate()->format('m/d/Y'); echo '<br>';
//                        #var_dump($order->getOrderDate()); echo '<br />';
//                    }
                }
                $i++;
            }
        }
        echo '<pre>';
        var_dump($ordersByWeek);
        exit;
    }

    public function get_user_program($userid) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('um')
                ->from('LSI\SystemBundle\Entity\UserMain', 'um')
                ->join('um.salesProgramType', 'spt')
                ->where('um.userid = :userid')
                ->setMaxResults(1)
                ->setParameter('userid', $userid);
        $userWithProgram = $qb->getQuery()->getResult();
        return $userWithProgram[0]->getSalesProgramType();
    }

    public function get_program_weeks(\LSI\SystemBundle\Entity\SalesProgramType $program) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('spt')
                ->from('LSI\SystemBundle\Entity\SalesProgramType', 'spt')
                ->where('spt.salesProgramType = :program')
                ->setParameter('program', $program)
                ->setMaxResults(1);
    }

    public function get_users_for_team($team) {
        if(!$team instanceof \LSI\SystemBundle\Entity\UserTeam){
            return array();
        }
        $qb = $this->_em->createQueryBuilder();
        $qb->select('um')
                ->addSelect('ut')
                ->from('LSI\SystemBundle\Entity\UserMain', 'um')
                ->leftJoin('um.userTeam', 'ut')
                ->leftJoin('um.userStatus', 'us')
                ->leftJoin('um.userRole', 'ur')
                ->where('ut.userTeamId = :teamid')
                ->orderBy('us.userStatus', 'ASC')
                ->addOrderBy('ur.userRole', 'ASC')
                ->setParameter('teamid', $team->getUserTeamId());
        return $qb->getQuery()->getResult();
    }

    public function get_user_daily_stats($userid, $i, $lastSunday) {
        $qb = $this->_em->createQueryBuilder();
        $qb->select('rdr')
                ->from('LSI\SystemBundle\Entity\RepDailyReport', 'rdr')
                ->leftJoin('rdr.repReportWeek', 'rrw')
                ->leftJoin('rrw.summerSalesWeek', 'ssw')
                ->leftJoin('rrw.userid', 'um')
                ->where('um.slsmNo = :userid')
                ->andWhere('rdr.dayOfWeek <= :i')
                ->andWhere('ssw.summerSalesWeekStartDate >= :lastSunday')
                ->setParameter('userid', (int) $userid)
                ->setParameter('i', (int) $i)
                ->setParameter('lastSunday', $lastSunday);
        return $qb->getQuery()->getResult();
    }

}