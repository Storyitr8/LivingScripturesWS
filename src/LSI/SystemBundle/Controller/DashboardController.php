<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use LSI\SystemBundle\Repository\ImportedReportCommissionRepository;

/**
 * @Route("")
 */
class DashboardController extends Controller
{

    /**
     * @Route("/", name="lsi.dashboard.dashboard.index")
     * @Template
     */
    public function indexAction()
    {
        //$wordpressSource = file_get_contents('https://lsisales.com/sales/wordpress');
        //$wordpress = preg_replace('/<form(.*)<\/form>/siU', '', preg_replace('/<head>(.*)<\/head>/siU', '<head></head>', $wordpressSource));
        return array(
            'wordpress' => null
        );
    }

    /**
     * @Route("/dasboard/left-sidebar-your-stats/", name="lg.dashboard.dashboard.leftsidebaryourstats")
     * @Template
     */
    public function leftSidebarYourStatsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $userRepo = $em->getRepository('LSISystemBundle:UserMain');
        /** @var ImportedReportCommissionRepository $importedCommissionRepo */
        $importedCommissionRepo = $em->getRepository('LSISystemBundle:ImportedReportCommission');
        $teamRepo = $em->getRepository('LSISystemBundle:UserTeam');

        $user = $this->getUser();
        if(!($user instanceof \LSI\SystemBundle\Entity\UserMain)){
            throw NotFoundException('User Not Found');
        }

        $wednesday = date('W', strtotime('last Wednesday'))==date('W') ? strtotime('last Wednesday')-7*86400+7200 : strtotime('last Wednesday');
        $prevSunday = date('W', strtotime('last Sunday'))==date('W') ? date('m/d/Y',strtotime('last Sunday')-7*86400+7200) : date('m/d/Y',strtotime('last Sunday'));

        //get some user sets
        $sets = $importedCommissionRepo->get_sets_report_for_user_for_year($user->getUserid(),date('Y'),$wednesday);
        $userSets = array(
            'total' => $sets['ENTERED'] + $sets['ENTERED_CAN'] + $sets['UPFRONT_PAID'] + $sets['UF_PAID_CAN'] + $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['PROCESSED_CREDIT'],
            'processed' => $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['CANCELED_PP'] + $sets['PROCESSED_CREDIT'],
            'weekSets' => 0.0,
            'teamProcessed' => 0.0,
        );

        //daily stats for input table (not implemented currently -- commented out in template file)
        $dayOfWeek = date('N');
        $lastSunday = new \DateTime($prevSunday);
        $dailyStats = $userRepo->get_user_daily_stats($user->getUserid(), $dayOfWeek, $lastSunday);

        $weekTotal = 0;
        foreach($dailyStats as $stats){
            $weekTotal += $stats->getSetsSold();
        }

        //get team obj
        $team = $teamRepo->get_active_team($user->getUserid());

        //get team members for team processed sets
        $teamMembers = $userRepo->get_users_for_team($team);

        $now = new \DateTime();

        $teamTotal=0;
        foreach($teamMembers as $teamMember){
                $sets = $importedCommissionRepo->get_sets_report_for_user_for_year($teamMember->getSlsmNo(),date('Y'),$now);
                $teamTotal += $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['CANCELED_PP'] + $sets['PROCESSED_CREDIT'];
        }

        //render the left sidbar
        return array(
                'user' => $user,
                'userSets' => $userSets,
                'dailyStats' => $dailyStats,
                'weekTotal' => $weekTotal,
                'today' => $dayOfWeek,
                'team' => $team,
                'members' => $teamMembers,
                'teamProcessed' => $teamTotal,
        );
    }

    /**
     * @Route("/dasboard/left-sidebar-your-stats/", name="lg.dashboard.dashboard.leftsidebaryourprogress")
     * @Template
     */
    public function leftSidebarYourProgressAction()
    {

        //get hours, doors, contacts, demos, referals, customers, sets for this week

        return array();
    }
}