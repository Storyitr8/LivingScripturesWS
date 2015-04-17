<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
//use LSI\SystemBundle\Entity\SalesProgramType;

class ProgramController extends Controller
{
    /**
     * @Route("/change-program-to/{salesProgramType}/", name="lsi.system.program.change_program")
     * ParamConverter("salesProgramType", class="LSISystemBundle:SalesProgramType", options={"id"="sales_program_type"})
     */
    public function changeProgramAction(Request $request, /*SalesProgramType*/ $program)
    {
        $this->get('lsi_system.program_service')->setActiveProgram($program);
        $referrer = $request->headers->get('referrer');
        if(!empty($referrer)){
            return $this->redirect($referrer);
        }
        else{
            return $this->redirect($this->generateUrl('lsi.dashboard.dashboard.index'));
        }
    }
}