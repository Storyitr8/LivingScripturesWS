<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

use \LSI\SystemBundle\Entity\RepReportWeek;
use \LSI\SystemBundle\Entity\RepDailyReport;
use LSI\SystemBundle\Entity\SummerSalesWeek;
use LSI\SystemBundle\Entity\UserMain;

use \LSI\SystemBundle\Form\WeeklyStatsForm;
use \LSI\SystemBundle\Form\StatsSelectForm;

/**
 * @Route("/stats")
 */
class StatsController extends Controller
{

    /**
     * @Route("/record/", name="lsi.system.stats.recordstats")
     * @Route("/record/for-user/{userid}/", name="lsi.system.stats.recordstatsforuser")
     * @Route("/record/for-week/{summerSalesWeekId}/", name="lsi.system.stats.recordstatsforweek")
     * @Route("/record/for-user/{userid}/for-week/{summerSalesWeekId}/", name="lsi.system.stats.recordstatsforuserforweek")
     * @Method({"GET"})
     * @Template
     */
    public function recordStatsAction(Request $request, UserMain $user=null, SummerSalesWeek $summerSalesWeek=null)
    {
        $em = $this->getDoctrine()->getManager();
        $teamRepo = $em->getRepository('LSISystemBundle:UserTeam');
        $summerSalesWeekRepo = $em->getRepository('LSISystemBundle:SummerSalesWeek');
        $repReportWeekRepo = $em->getRepository('LSISystemBundle:RepReportWeek');

        // TODO replace the set program with one saved to the session on login / switch
        $showInactive = $request->query->get('show_inactive')?true:false;
        $onlyShowTeam = true;
        if($this->get('security.context')->isGranted('ROLE_ACTIVE_ADMIN')){
            $onlyShowTeam = false;
        }
        if($user == null){
            $user = $this->getUser();
        }
        $selectForm = $this->createForm(new StatsSelectForm(),null,array(
            'program'=>$this->getUser()->getSalesProgramType(),
            'show_inactive'=>$showInactive,
            'only_show_team'=>$onlyShowTeam,
            'team'=>$teamRepo->get_active_team($this->getUser()),
            'user'=>$user,
            'week'=>$summerSalesWeek
        ));

        $userid = $user->getUserId();
        $options = array();

        //if userid is provide does the user part of their team or is user admin?
        if($userid != null){
            if(!$this->get('security.context')->isGranted('ROLE_MANAGER')){
                throw AccessDeniedException('Only Managers or Admins can record other users stats');
            }
            $curUserTeam = $teamRepo->get_active_team($this->getUser()->getUserid());
            if(!$teamRepo->is_member_of_team($userid,$curUserTeam->getUserTeamId()) && !$this->get('security.context')->isGranted('ROLE_ACTIVE_ADMIN')){
                throw AccessDeniedException('You can only record stats for members of your team.');
            }
            $options['userid']= $userid;
        }
        else{
            $options['userid']= $this->getUser()->getUserid();
        }
        if($summerSalesWeek == null){
            $year = date('Y');
            $week = date('W');
            $curWeekStartDay = new \DateTime(date('m/d/Y',strtotime($year.'W'.$week.'0')));
            $summerSalesWeek = $summerSalesWeekRepo->findOneBy(array('summerSalesWeekStartDate'=>$curWeekStartDay));
            if(!$summerSalesWeek){
                throw new \Exception('Summer sales week not found');
            }
        }
        $options['summer_sales_week_id'] = $summerSalesWeek->getSummerSalesWeekId();

        $weeklyStats = $repReportWeekRepo->findOneBy(array(
            'userid'=>$userid,
            'summerSalesWeek'=>$summerSalesWeek
        ));
        if($weeklyStats == null){
            $weeklyStats = new RepReportWeek();
            $weeklyStats->setUserid($user);
            $weeklyStats->setSummerSalesWeek($summerSalesWeek);
            $em->persist($weeklyStats);
            $em->flush();
        }
        $em->refresh($weeklyStats);
        $dailyStats = $weeklyStats->getRepDailyReports();
        $days = array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6);
        if(!empty($dailyStats)){
            foreach($dailyStats as $stat){
                unset($days[$stat->getDayOfWeek()]);
            }
        }
        foreach($days as $key => $day){
            $repDailyStat = new RepDailyReport();
            $repDailyStat->setDayOfWeek($day);
            $repDailyStat->setRepReportWeek($weeklyStats);
            $em->persist($repDailyStat);
        }
        $em->flush();
        $em->refresh($weeklyStats);
        $form = $this->createForm(new WeeklyStatsForm(),$weeklyStats,$options);
        return array(
            'form' => $form->createView(),
            'user'=>$user,
            'week' => $summerSalesWeek,
            'year'=> $summerSalesWeek->getSummerSalesWeekStartDate()->format('Y'),
            'weeknum'=> $summerSalesWeek->getSummerSalesWeekStartDate()->format('W'),
            'selectForm' => $selectForm->createView()
        );
    }

    /**
     * @Route("/save-stats/for-user/{userid}/for-week/{summerSalesWeekId}/", name="lsi.system.stats.savestatsforuserforweek")
     * @Method({"POST"})
     * @Template
     */
    public function saveStatsAction(Request $request, UserMain $user=null, SummerSalesWeek $summerSalesWeek=null)
    {
        $em = $this->getDoctrine()->getManager();
        $repReportWeekRepo = $em->getRepository('LSISystemBundle:RepReportWeek');
        $userid=$user->getUserid();
        $weeklyStats = $repReportWeekRepo->findOneBy(array(
            'userid'=>$userid,
            'summerSalesWeek'=>$summerSalesWeek
        ));
        $options = array(
            'userid'=>$userid,
            'summer_sales_week_id'=>$summerSalesWeek->getSummerSalesWeekId()
        );
        $form = $this->createForm(new WeeklyStatsForm(),$weeklyStats,$options);
        $form->handleRequest($request);
        if($form->isValid()){
            $em->flush();
        }
        else{
            $this->get('session')->getFlashBag()->set('danger',$form->getErrorsAsString());

        }
        return $this->redirect($this->generateUrl('lsi.system.stats.recordstatsforuserforweek',array(
            'userid'=>$user,
            'summerSalesWeekId'=>$summerSalesWeek
        )));
    }

    /**
     * @Route("/redirect-to-user-week/", name="lsi.system.stats.redirecttouserweek")
     * @Method({"POST"})
     * @Template
     */
    public function redirectToUserWeekAction(Request $request, UserMain $user=null, SummerSalesWeek $summerSalesWeek=null)
    {
        $em = $this->getDoctrine()->getManager();
        $teamRepo = $em->getRepository('LSISystemBundle:UserTeam');

        // TODO replace the set program with one saved to the session on login / switch
        $showInactive = $request->query->get('show_inactive')?true:false;
        $onlyShowTeam = true;
        if($this->get('security.context')->isGranted('ROLE_ACTIVE_ADMIN')){
            $onlyShowTeam = false;
        }
        $selectForm = $this->createForm(new StatsSelectForm(),null,array(
            'program'=>$this->getUser()->getSalesProgramType(),
            'show_inactive'=>$showInactive,
            'only_show_team'=>$onlyShowTeam,
            'team'=>$teamRepo->get_active_team($this->getUser()),
            'user'=>$user,
            'week'=>$summerSalesWeek
        ));
        if($request->getMethod() == "POST"){
            $selectForm->bind($request);
            if($selectForm->isValid()){
                $selectFormData = $selectForm->getData();
                return $this->redirect($this->generateUrl('lsi.system.stats.recordstatsforuserforweek',array(
                    'userid'=>$selectFormData['user'],
                    'summerSalesWeekId'=>$selectFormData['week']
                )));
            }
        }
        else{
            return $this->redirect($this->generateUrl('lsi.system.stats.recordstats'));
        }
    }

}