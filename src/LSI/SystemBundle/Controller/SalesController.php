<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/sales")
 */
class SalesController extends Controller
{

    /**
     * @Route("/enter-contract/", name="lsi.sales.sales.index")
     * @Template
     */
    public function enterContractAction()
    {
        //get core dvds by series

        //get
        $saless = $this->getDoctrine()->getRepository('LSISystemBundle:Sales')->findAll();
        return array(
            'saless' => $saless,
        );
    }

    /**
     * @Route("/zip-to-tax/", name="lsi.sales.sales.ziptotax")
     * @Template
     */
    public function zipToTaxAction(Request $request)
    {
        $form = $this->createFormBuilder()
                ->add('zip','text',array('attr'=>array('class'=>'form-control','pattern'=>'\d*','maxlength'=>'5')))
                ->add('get_tax_rate','submit',array('attr'=>array('class'=>'btn btn-primary')))
                ->getForm();
        if($request->getMethod() == 'POST'){
            $form->handleRequest($request);
            if($form->isValid()){
                $formData = $form->getData();
                $zip = $formData['zip'];
                $taxObj = $this->getDoctrine()->getManager()->getRepository('LSISystemBundle:TaxRates')->findOneBy(array('zipcode'=>$zip));
                $taxRate = 0;
                if($taxObj != null){
                    $taxRate = $taxObj->getTaxRate();
                }
                if($request->isXmlHttpRequest()){
                    return new Response(json_encode(array('tax_rate'=>$taxRate)),200,array('Content-Type'=>'Application/JSON'));
                }
                return array(
                    'form'=>$form->createView(),
                    'tax_rate'=>$taxRate
                );
            }
        }
        if($request->isXmlHttpRequest()){
            return new Response(
                $this->get('twig')->loadTemplate('LSISystemBundle:Sales:zipToTax.html.twig')->renderBlock('modal',array('form'=>$form->createView())),
                200,
                array('ContentType'=>'text/html')
            );
        }
        return array(
            'form'=>$form->createView(),
            'tax_rate'=>false
        );
    }

}