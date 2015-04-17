<?php
namespace LSI\CommissionBundle\Controller;

use LSI\UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;


/**
 * @Route("/api/get-commission-data")
 */
class ApiCommissionController extends Controller
{

    /**
     * @Route("/for-salesman/{slsm_no}", name="lsi.commission.commission.index")
     * @Template()
     */
    public function indexAction(Request $request, $slsm_no)
    {
        $user = $this->getDoctrine()->getManager()->getRepository('LSIUserBundle:User')->findOneBy(array('slsm_no'=>$slsm_no));
        if(!$user){
            return new JsonResponse(array(
                'status'=>'failed',
                'message'=>'No salesman found by number: '.$slsm_no
            ),400);
        }
        $bonuses = $user->getBonuses();
        $checks = $user->getChecks();
        $commissions = $user->getCommissions();
        $expenses = $user->getExpenses();

        $serializer = $this->get('jms_serializer');
        $data = array(
            'status'=>'success',
            'salesman'=> $user->getSlsmNo(),
            'bonuses'=>$bonuses,
            'checks'=>$checks,
            'commissions'=>$commissions,
            'expenses'=>$expenses
        );

        return new Response($serializer->serialize($data, 'json'),200,array('Content-Type'=>'application/json'));
    }

    /**
     * @Route("/{id}/view/", name="lsi.commission.commission.view")
     * @Template()
     */
    public function viewAction(Commission $commission){}

    /**
     * @Route("/create/", name="lsi.commission.commission.create")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $commission = new Commission();
        $form = $this->createForm(new CommissionForm,$commission);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($commission);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Created New Commission Successfully');
                return $this->redirect($this->generateUrl('lsi.commission.commission.index'));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Create New Commission');
            }
        }
        return array(
            'commission' => $commission,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/edit/", name="lsi.commission.commission.edit")
     * @Template()
     */
    public function editAction(Request $request, Commission $commission)
    {
        $form = $this->createForm(new CommissionForm,$commission);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Updated Commission Successfully');
                return $this->redirect($this->generateUrl('lsi.commission.commission.view',array('id'=>$commission)));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Update Commission');
            }
        }
        return array(
            'commission' => $commission,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/{id}/delete/", name="lsi.commission.commission.delete")
     * @Template()
     */
    public function deleteAction(Request $request, Commission $commission)
    {
        $form = $this->createForm(new CommissionDeleteForm,$commission);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->remove($commission);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Deleted Commission Successfully');
                return $this->redirect($this->generateUrl('lsi.commission.commission.index'));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Delete Commission');
            }
        }
        return array(
            'commission' => $commission,
            'form' => $form->createView(),
        );
    }
}