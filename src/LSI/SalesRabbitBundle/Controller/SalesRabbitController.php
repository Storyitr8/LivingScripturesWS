<?php
namespace LSI\SalesRabbitBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use LSI\SalesRabbitBundle\Entity\SalesRabbitOrder;
use LSI\SalesRabbitBundle\Form\SalesRabbitOrderForm;
use LSI\SalesRabbitBundle\Form\SalesRabbitOrderDeleteForm;

/**
 * @Route("/salesrabbit")
 */
class SalesRabbitController extends Controller
{

    /**
     * @Route("", name="lsi.sales_rabbit.sales_rabbit_orders.create")
     * @Method({"POST"})
     */
    public function createAction(Request $request)
    {

        $sales_rabbit_orders = new SalesRabbitOrder();
        $data = json_decode($request->getContent());
        if($data){
            $sales_rabbit_orders->setData($data);
            $em = $this->getDoctrine()->getManager();
            $em->persist($sales_rabbit_orders);
            $em->flush();
            return new JsonResponse(array(
                'status'=>'success'
            ));
        }
        else{
            return new JsonResponse(array(
                'status'=> 'failed',
                'message'=> 'Invalid JSON formatting'
            ));
        }
    }

    /**
     * @Route("/rendercsv", name="lsi.sales_rabbit.sales_rabbit.rendercsv")
     * @Method({"GET"})
     */
    public function renderCsvAction()
    {
        $em = $this->getDoctrine()->getManager();
        $orders = $em->getRepository('LSISalesRabbitBundle:SalesRabbitOrder')->findBy(array(
            'processed'=>false
        ));
        foreach($orders as $order){

        }
        //$orders
    }
}