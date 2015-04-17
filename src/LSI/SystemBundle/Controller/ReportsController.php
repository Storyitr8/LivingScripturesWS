<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LSI\SystemBundle\Entity\UserMain;
use LSI\SystemBundle\Form\CommissionReportRepSelectForm;


/**
 * @Route("/reports")
 */
class ReportsController extends Controller
{

    /**
     * @Route("/commission-report/", name="lsi.system.reports.commissionreport")
     * @Route("/commission-report/for-user/{userid}/for-year/{year}", name="lsi.system.reports.commissionreportwithuserandyear")
     * @Template
     */
    public function commissionReportAction(Request $request, UserMain $user=null, $year=null)
    {
        $programEntity = $this->get('lsi_system.program_service')->getActiveProgram();
        $program = $programEntity->getSalesProgramType();

        $funcPrefix = 'SS';
        if($program == 'FT'){
            $funcPrefix = 'FT';
        }

        $funcName = $funcPrefix.'CommissionReport';



        return $this->$funcName($request, $program, $user, $year);
    }

    private function FTCommissionReport(Request $request, $program, UserMain $user=null, $year=null)
    {
//Setup repos
        $entityManager = $this->getDoctrine()->getManager();
        $userRepo = $entityManager->getRepository('LSISystemBundle:UserMain');
        $teamRepo = $entityManager->getRepository('LSISystemBundle:UserTeam');
        $importedChecksRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportChecks');
        $importedCommissionRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportCommission');
        $importedBonusRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportBonus');
        $importedExpenseRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportExpense');

        //Get and setup request data

        if($user == null){
            $user = $this->getUser();
        }
        if($year == null){
            $year = date('Y');
        }
        $formOptions = array(
            'program' => $program,
            'user'=>$user,
            'year'=>$year,
        );
        if($this->get('security.context')->isGranted('ROLE_MANAGER') && !$this->get('security.context')->isGranted('ROLE_ACTIVE_ADMIN')){
            $formOptions['only_show_team'] = true;
            $formOptions['team'] = $teamRepo->get_active_team($this->getUser());
        }
        //setup form and handle if this is a submission
        $form = $this->createForm(new CommissionReportRepSelectForm(),null,$formOptions);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $formData = $form->getNormData();
                return $this->redirect($this->generateUrl('lsi.system.reports.commissionreportwithuserandyear',array('userid'=>$formData['user']->getUserid(),'year'=>$formData['year'])));
            }
            else{
                $this->get('session')->getFlashBag()->set('danger',$form->getErrorsAsString());
            }
        }

        //Get the requested user object and the logged in user object **/
        $selectedUser = $user;

        //Get selected user team
        $selectedUserTeam = $teamRepo->get_active_team($selectedUser)->getUserTeamId();

        //if they are an admin, show the override column
        $showOverrideComm = false;
        $showSlsm = false;

        if($this->get('security.context')->isGranted('ROLE_MANAGER')){
            $showOverrideComm = true;
            $showSlsm = true;
        }

        //Setup view perms
        $showUpfront = true;
        if ($program == 'FT' || $program == 'FS' || $program == 'ES'):
            $showUpfront = false;
        endif;

        //Load the commissions for the selected user for the selected year
        $ordersForAllWeeks = $importedCommissionRepo->get_commissions_for_user_by_week_in_year($selectedUser->getSlsmNo(),$year);

        //Load the checks the user has recieved for the given year
        $weeklyChecks = $importedChecksRepo->get_checks_for_user_by_year($selectedUser->getSlsmNo(), $year);
        //Load the bonuses the user has recieved for the given year
        $bonuses = $importedBonusRepo->get_user_bonuses_by_category_from_year($selectedUser->getSlsmNo(),$year);

        //Load the expenses the user has spent for the given year
        $expenses = $importedExpenseRepo->get_user_expenses_by_category_from_year($selectedUser->getSlsmNo(),$year);


        //get selected users processed stats
        $now = new \DateTime();
        $userSetStats = $importedCommissionRepo->get_sets_report_for_user_for_year($selectedUser->getSlsmNo(),$year, $now);
        $userProcessedSets = $userSetStats['PROCESSED'] + $userSetStats['PROCESSED_CAN'] + $userSetStats['CANCELED_PP'];

        //If manager get Team total processed sets
        $teamProcessedSets = 0;
        if($selectedUser->getUserRole()->getUserRole() == 'M'){
            //Get team slsmno's
            $teamMembers = $userRepo->get_users_for_team($selectedUserTeam);
            foreach($teamMembers as $member){
                $sets = $importedCommissionRepo->get_sets_report_for_user_for_year($member->getSlsmNo(),$year, $now);
                $teamProcessedSets += $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['CANCELED_PP'] + $sets['PROCESSED_CREDIT'];
            }
        }
        $template = 'SSCommissionReport.html.twig';
        if($program == 'FT'){
            $template = 'FTCommissionReport.html.twig';
        }
        //Send all this data to be rendered into the view
        return $this->render('LSISystemBundle:Reports:'.$template, array(
            'selectedRep' => $selectedUser,
            'ordersForAllWeeks' => $ordersForAllWeeks,
            'weeklyChecks' => $weeklyChecks,
            'bonuses' => $bonuses,
            'expenses' => $expenses,
            'showUpfront' => $showUpfront,
            'showOverrideComm' => $showOverrideComm,
            'showSlsm' => $showSlsm,
            'userProcessedSets' => $userProcessedSets,
            'teamProcessedSets' => $teamProcessedSets,
            'form'=>$form->createView()
        ));
    }

    private function SSCommissionReport(Request $request, $program, UserMain $user=null, $year=null)
    {
        //Setup repos
        $entityManager = $this->getDoctrine()->getManager();
        $userRepo = $entityManager->getRepository('LSISystemBundle:UserMain');
        $teamRepo = $entityManager->getRepository('LSISystemBundle:UserTeam');
        $importedChecksRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportChecks');
        $importedCommissionRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportCommission');
        $importedBonusRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportBonus');
        $importedExpenseRepo = $entityManager->getRepository('LSISystemBundle:ImportedReportExpense');

        //Get and setup request data

        if($user == null){
            $user = $this->getUser();
        }
        if($year == null){
            $year = date('Y');
        }
        $formOptions = array(
            'program' => $program,
            'user'=>$user,
            'year'=>$year,
        );
        if($this->get('security.context')->isGranted('ROLE_MANAGER') && !$this->get('security.context')->isGranted('ROLE_ACTIVE_ADMIN')){
            $formOptions['only_show_team'] = true;
            $formOptions['team'] = $teamRepo->get_active_team($this->getUser());
        }
        //setup form and handle if this is a submission
        $form = $this->createForm(new CommissionReportRepSelectForm(),null,$formOptions);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $formData = $form->getNormData();
                return $this->redirect($this->generateUrl('lsi.system.reports.commissionreportwithuserandyear',array('userid'=>$formData['user']->getUserid(),'year'=>$formData['year'])));
            }
            else{
                $this->get('session')->getFlashBag()->set('danger',$form->getErrorsAsString());
            }
        }

        //Get the requested user object and the logged in user object **/
        $selectedUser = $user;

        //Get selected user team
        $selectedUserTeam = $teamRepo->get_active_team($selectedUser)->getUserTeamId();

        //if they are an admin, show the override column
        $showOverrideComm = false;
        $showSlsm = false;

        if($this->get('security.context')->isGranted('ROLE_MANAGER')){
            $showOverrideComm = true;
            $showSlsm = true;
        }

        //Setup view perms
        $showUpfront = true;
        if ($program == 'FT' || $program == 'FS' || $program == 'ES'):
            $showUpfront = false;
        endif;

        //Load the commissions for the selected user for the selected year
        $ordersForAllWeeks = $importedCommissionRepo->get_commissions_for_user_by_week_in_year($selectedUser->getSlsmNo(),$year);

        //Load the checks the user has recieved for the given year
        $weeklyChecks = $importedChecksRepo->get_checks_for_user_by_year($selectedUser->getSlsmNo(), $year);
        //Load the bonuses the user has recieved for the given year
        $bonuses = $importedBonusRepo->get_user_bonuses_by_category_from_year($selectedUser->getSlsmNo(),$year);

        //Load the expenses the user has spent for the given year
        $expenses = $importedExpenseRepo->get_user_expenses_by_category_from_year($selectedUser->getSlsmNo(),$year);


        //get selected users processed stats
        $now = new \DateTime();
        $userSetStats = $importedCommissionRepo->get_sets_report_for_user_for_year($selectedUser->getSlsmNo(),$year, $now);
        $userProcessedSets = $userSetStats['PROCESSED'] + $userSetStats['PROCESSED_CAN'] + $userSetStats['CANCELED_PP'];

        //If manager get Team total processed sets
        $teamProcessedSets = 0;
        if($selectedUser->getUserRole()->getUserRole() == 'M'){
            //Get team slsmno's
            $teamMembers = $userRepo->get_users_for_team($selectedUserTeam);
            foreach($teamMembers as $member){
                $sets = $importedCommissionRepo->get_sets_report_for_user_for_year($member->getSlsmNo(),$year, $now);
                $teamProcessedSets += $sets['PROCESSED'] + $sets['PROCESSED_CAN'] + $sets['CANCELED_PP'] + $sets['PROCESSED_CREDIT'];
            }
        }
        $template = 'SSCommissionReport.html.twig';
        if($program == 'FT'){
            $template = 'FTCommissionReport.html.twig';
        }
        //Send all this data to be rendered into the view
        return $this->render('LSISystemBundle:Reports:'.$template, array(
            'selectedRep' => $selectedUser,
            'ordersForAllWeeks' => $ordersForAllWeeks,
            'weeklyChecks' => $weeklyChecks,
            'bonuses' => $bonuses,
            'expenses' => $expenses,
            'showUpfront' => $showUpfront,
            'showOverrideComm' => $showOverrideComm,
            'showSlsm' => $showSlsm,
            'userProcessedSets' => $userProcessedSets,
            'teamProcessedSets' => $teamProcessedSets,
            'form'=>$form->createView()
        ));
    }


}