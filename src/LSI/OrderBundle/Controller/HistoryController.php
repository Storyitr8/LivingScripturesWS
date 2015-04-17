<?php
namespace LSI\OrderBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use LSI\OrderBundle\Entity\History;
use LSI\OrderBundle\Form\HistoryForm;
use LSI\OrderBundle\Form\HistoryDeleteForm;

/**
 * @Route("/sales/history", requirements={"_locale"="^[a-z]{2}(_[A-Z]{2})?"})
 */
class HistoryController extends Controller
{
    /**
     * @Route("", name="lsi.order.history.update")
     * @Method({"POST"})
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $history = new History();
        $history->setData($request->request->all());
        $em->persist($history);
        $em->flush();
        return new JsonResponse(array(
            'status'=>'success'
        ));
    }
    
    /**
     * @Route("/{PrimaryKey}/view/", name="lsi.order.history.view")
     * @Template()
     */
    public function viewAction(History $history){}
    
    /**
     * @Route("/create/", name="lsi.order.history.create")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $history = new History();
        $form = $this->createForm(new HistoryForm,$history);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->persist($history);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Created New History Successfully');
                return $this->redirect($this->generateUrl('lsi.order.history.index'));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Create New History');
            }
        }
        return array(
            'history' => $history,
            'form' => $form->createView(),
        );
    }
    
    /**
     * @Route("/{PrimaryKey}/edit/", name="lsi.order.history.edit")
     * @Template()
     */
    public function editAction(Request $request, History $history)
    {
        $form = $this->createForm(new HistoryForm,$history);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Updated History Successfully');
                return $this->redirect($this->generateUrl('lsi.order.history.view',array('PrimaryKey'=>$history)));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Update History');
            }
        }
        return array(
            'history' => $history,
            'form' => $form->createView(),
        );
    }
    
    /**
     * @Route("/{PrimaryKey}/delete/", name="lsi.order.history.delete")
     * @Template()
     */
    public function deleteAction(Request $request, History $history)
    {
        $form = $this->createForm(new HistoryDeleteForm,$history);
        if($request->isMethod('post')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->remove($history);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success','Deleted History Successfully');
                return $this->redirect($this->generateUrl('lsi.order.history.index'));
            }
            else{
                $this->get('session')->getFlashBag()->add('danger','Failed To Delete History');
            }
        }
        return array(
            'history' => $history,
            'form' => $form->createView(),
        );
    }
}
