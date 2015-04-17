<?php

namespace LSI\UserBundle\Controller;

use LSI\UserBundle\Form\UserRegistrationForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\Security\Core\SecurityContext;
use LSI\UserBundle\Entity\User;
use LSI\UserBundle\Form\UserForm;
use LSI\UserBundle\Form\UserDeleteForm;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;

class UserController extends Controller
{

    /**
     * @Route("/register", name="lsi.user.user.register")
     * @Template()
     */
    public function registerAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserRegistrationForm(), $user);
        $error = '';
        if ($request->isMethod('post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                /** @var User $existingUser */
                $existingUser = $em->getRepository('LSIUserBundle:User')->findBy(array(
                    'slsm_no' => $user->getSlsmNo(),
                    'first_name' => $user->getFirstName(),
                    'last_name' => $user->getLastName()
                ));
                if ($existingUser && !$existingUser->getEmail()) {
                    $encoder = $this->container->get('security.password_encoder');
                    $existingUser->setEmail($user->getEmail())
                        ->setPassword($encoder->encodePassword($existingUser, $user->getPassword()));
                    $em->flush();
                    $token = new UsernamePasswordToken($existingUser, null, 'main', $user->getRoles());
                    $this->get('security.token_storage')->setToken($token);
                    $this->get('session')->set('_security_main', serialize($token));
                    return $this->redirect($this->generateUrl('lsi.dashboard.dashboard.index'));
                } else {
                    $error = 'Unable to register you. The SLSM Number, First Name and Last Name that you provided did not match our records. Or you have already registered. If you have already registered and you have forgotten your password try the Forgot Password link.';
                }
            }
        }
        return array(
            'error' => $error,
            'form' => $form->createView()
        );
    }

    /**
     * @Route("/login", name="lsi.user.user.login")
     * @Template
     */
    public function loginAction(Request $request)
    {
        $session = $this->get('session');
        // get the login error if there is one
        $reqErrors = $request->attributes->has(SecurityContext::AUTHENTICATION_ERROR);
        $sessionErrors = $session->get(SecurityContext::AUTHENTICATION_ERROR);
        if($reqErrors){
            $session->getFlashBag()->add('danger',$reqErrors->getMessage());
        }
        if($sessionErrors){
            $session->getFlashBag()->add('danger',$sessionErrors->getMessage());
        }
        return array(
            //'last_username' => $session->get(SecurityContext::LAST_USERNAME)
        );
    }

    /**
     * @Route("/forgot-password", name="lsi.user.user.forgot_password")
     * @Template
     */
    public function forgotPasswordAction(Request $request)
    {
        $temp = new UserMain();
        $form = $this->createForm(new ForgotPasswordForm(), $temp);
        if ($request->isMethod('POST')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $repo = $em->getRepository('LGUserBundle:User');
                $user = $repo->findOneByEmail($temp->getEmail());
                if($user){
                    $link = $this->generateUrl('lsi.system.login.resetpassword', array('token'=>$user->generateResetToken()), true);
                    $em->flush();
                    $message = \Swift_Message::newInstance()
                        ->setSubject('Forgot Password')
                        ->setFrom('no-reply@lsisales.com')
                        ->setTo($user->getEmail())
                        ->setBody(
                            $this->renderView(
                                'LGUserBundle:Login:forgotpassword-email.html.twig',
                                array('link' => $link)
                            ),
                            'text/html'
                        )
                    ;
                    $this->get('mailer')->send($message);
                    $this->get('session')->getFlashBag()->add('success', 'New password has been sent to '.$user->getEmail());
                    return $this->redirect($this->generateUrl('lsi.system.login.login'));
                }
                else{
                    $this->get('session')->getFlashBag()->add('danger', 'No user with the email '.$temp->getEmail(). ' exists.');
                }
            }
            else {
                $this->get('session')->getFlashBag()->add('danger', 'Invalid form: '.$form->getErrorsAsString());
            }
        }
        return array(
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/reset-password/token/{token}", name="lsi.user.user.reset_password")
     * @Template()
     */
    public function resetPasswordAction(Request $request, $token)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository('LGUserBundle:User');
        $user = $repo->findOneByResetPassToken($token);
        if($user){
            if($user->getResetPassTokenExpires() > new \DateTime('now')){
                $form = $this->createForm(new ResetPasswordForm(), $user);
                if($request->getMethod() == "POST"){
                    $form->handleRequest($request);
                    $encoder = $this->get('security.encoder_factory')->getEncoder($user);
                    $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
                    $user->setPassword($password);

                    $em->flush();
                    $this->get('session')->getFlashBag()->set('success', 'Password Reset Successfully!');
                    return $this->redirect($this->generateUrl('lsi.system.login.login'));
                }
                return array(
                    'form'=>$form->createView()
                );
            }
            else{
                $this->get('session')->getFlashBag()->set('danger', 'This Password Reset Token Has Expired.');
                return $this->redirect($this->generateUrl('lsi.system.login.forgotpassword'));
            }
        }
        else{
            $this->get('session')->getFlashBag()->set('danger', 'Invalid Token.');
            return $this->redirect($this->generateUrl('lsi.system.login.forgotpassword'));
        }
    }

    /**
     * @Route("/users/", name="lsi.user.user.index")
     * @Template()
     * @Security("has_rold('ROLE_ADMIN')")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $users = $em->getRepository('LSIUserBundle:User')->findAll();
        return array(
            'users' => $users,
        );
    }

    /**
     * @Route("/user/{id}/view/", name="lsi.user.user.view")
     * @Template()
     * @Security("has_rold('ROLE_ADMIN')")
     */
    public function viewAction(User $user)
    {
    }

    /**
     * @Route("/user/create/", name="lsi.user.user.create")
     * @Template()
     * @Security("has_rold('ROLE_ADMIN')")
     */
    public function createAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(new UserForm, $user);
        if ($request->isMethod('post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Created New User Successfully');
                return $this->redirect($this->generateUrl('lsi.user.user.index'));
            } else {
                $this->get('session')->getFlashBag()->add('danger', 'Failed To Create New User');
            }
        }
        return array(
            'user' => $user,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/user/{id}/edit/", name="lsi.user.user.edit")
     * @Template()
     * @Security("has_rold('ROLE_ADMIN')")
     */
    public function editAction(Request $request, User $user)
    {
        $form = $this->createForm(new UserForm, $user);
        if ($request->isMethod('post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Updated User Successfully');
                return $this->redirect($this->generateUrl('lsi.user.user.view', array('id' => $user)));
            } else {
                $this->get('session')->getFlashBag()->add('danger', 'Failed To Update User');
            }
        }
        return array(
            'user' => $user,
            'form' => $form->createView(),
        );
    }

    /**
     * @Route("/user/{id}/delete/", name="lsi.user.user.delete")
     * @Template()
     * @Security("has_rold('ROLE_ADMIN')")
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createForm(new UserDeleteForm, $user);
        if ($request->isMethod('post')) {
            $form->handleRequest($request);
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('success', 'Deleted User Successfully');
                return $this->redirect($this->generateUrl('lsi.user.user.index'));
            } else {
                $this->get('session')->getFlashBag()->add('danger', 'Failed To Delete User');
            }
        }
        return array(
            'user' => $user,
            'form' => $form->createView(),
        );
    }
}