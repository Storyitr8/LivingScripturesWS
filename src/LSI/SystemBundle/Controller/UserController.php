<?php
namespace LSI\SystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use LSI\SystemBundle\Form\UserMainForm;
use LSI\SystemBundle\Entity\UserMain;


/**
 * @Route("/user")
 */
class UserController extends Controller
{

    /**
     * @Route("/", name="lsi.system.user.index")
     * @Template
     */
    public function indexAction()
    {
        $users = $this->getDoctrine()->getRepository('LSISystemBundle:UserMain')->findAll();
        return array(
            'users' => $users,
        );
    }

    /**
     * @Route("/create", name="lsi.system.user.create")
     * @Template
     */
    public function createAction(Request $request)
    {
        $user = new UserMain();
        $form = $this->createForm(new UserMainForm(), $user);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Created Successfully');
                return $this->redirect($this->generateUrl('lsi.system.user.index'));
            }             else {
                $this->get('session')->getFlashBag()->add('danger', $form->getErrorsAsString());
            }
        }
        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/edit/{userid}", name="lsi.system.user.edit")
     * @Template
     */
    public function editAction(Request $request, UserMain $user)
    {
        $form = $this->createForm(new UserMainForm(), $user);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Edits Saved Successfully');
                return $this->redirect($this->generateUrl('lsi.system.user.index'));
            }             else {
                $this->get('session')->getFlashBag()->add('danger', $form->getErrorsAsString());
            }
        }
        return array(
            'form' => $form->createView(),
            'user' => $user
        );
    }

    /**
     * @Route("/delete/{userid}", name="lsi.system.user.delete")
     * @Template()
     */
    public function deleteAction(Request $request, UserMain $user)
    {
        $form = $this->createForm(new UserMainForm(), $user);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getEntityManager();
                $em->remove($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Deleted Successfully');
                return $this->redirect($this->generateUrl('lsi.system.user.index'));
            }             else {
                $this->get('session')->getFlashBag()->add('danger', $form->getErrorsAsString());
            }
        }
        return array(
            'form' => $form->createView(),
            'user' => $user
        );
    }

}