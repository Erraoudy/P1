<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use TWC\OndeBundle\Entity\OndeUser;
use TWC\OndeBundle\Entity\OndeMedia;

class AdminController extends Controller
{
	public function loginAction(){
      return $this->render('TWCOndeBundle:Admin:login.html.twig');
  }

  public function connectionAction(Request $req){
    $articles = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findAll();
    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneById($this->get('session')->get("user_id"));
    
  	if($req->isMethod('POST')){
    	$user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneByEmail($_POST['login_email']);
    	
      	if($user != null){
      
          if(!password_verify($_POST['login_password'], $user->getPassword())){
              
              $this->get('session')->getFlashBag()->add('notice',array('type' => 'danger', 'title' =>'Login Error','message'=>'wrong password'));
              return $this->redirectToRoute('admin_login');
          }
          if($user->getActivated() == 0){
              $this->get('session')->getFlashBag()->add('notice',array('type' => 'danger', 'title' =>'Login Error','message'=>'please activate your account first'));

              $em = $this->getDoctrine()->getManager();
              $message = (new \Swift_Message('Registration'))
                ->setFrom('service@car25.ch')
                ->setTo($_POST['login_email'])
                ->setBody($this->renderView('Emails/Registration.html.twig',array('user' => $user)),'text/html');
              $this->get('mailer')->send($message);
              $em->flush();
              
              return $this->redirectToRoute('twc_onde_homepage');
          }

          $this->get('session')->set("user_id", $user->getId());
          return $this->redirectToRoute('onde_list_media');

      	}else{
          $this->get('session')->getFlashBag()->add('notice',array('type' => 'danger', 'title' =>'Login Error','message'=>'this user does not exist'));
          return $this->redirectToRoute('admin_login');
      	}
    	}
    	return $this->render('TWCOndeBundle:Onde:listArticle.html.twig',array('articles'=>$articles)); 

	}

  public function ForgotPWAction(Request $req){
    $em = $this->getDoctrine()->getManager();
    if($req->isMethod('POST')){
        $repository = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser');
        $user = $repository->findOneByEmail($_POST['recoverPW']);

        if($user == NULL){
            $this->addFlash('notice', array('type' => 'danger', 'title' => 'Error !', 'message' => 'This Email does not exist'));
            return $this->redirectToRoute('admin_login');
        }
        else{
              $message = (new \Swift_Message('ONDE Password Recovery'))
                ->setFrom('service@car25.ch')
                ->setTo($_POST['recoverPW'])
                ->setBody($this->renderView('Emails/forgotPw.html.twig',array('user' => $user)),'text/html');
              $this->get('mailer')->send($message);
              $em->flush();

            $this->get('session')->getFlashBag()->add('notice',array('type' => 'success', 'title' => 'Done !','message'=>'Check your email to complete the process'));
            return $this->redirectToRoute('twc_onde_homepage');
        }
    }
    return $this->redirectToRoute('twc_onde_homepage');
  
  }
  public function recoverForgottenPasswordAction(Request $req, $email){

    $user = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeUser')->findOneByEmail($email);
    if($req->isMethod('POST')){
        if(isset($_POST['resetPassword']) and $_POST['resetPassword'] != null and isset($_POST['resetPasswordConfirm']) and $_POST['resetPasswordConfirm'] != null) {
            if($_POST['resetPasswordConfirm'] != $_POST['resetPassword']){
                $this->get('session')->getFlashBag()->add('notice',array('type' => 'danger', 'title' => 'Login Error !','message'=>'Passwords do not match'));
                return $this->redirectToRoute('sf_front_recoverForgottenPw',array('email' => $email));
            }
            else{
                $user->setPassword(password_hash($_POST['resetPasswordConfirm'], PASSWORD_BCRYPT));

                $em = $this->getDoctrine('doctrine')->getManager();
                $em->persist($user);
                $em->flush();
                $this->get('session')->getFlashBag()->add('notice',array('type' => 'success', 'title' => 'Done !','message'=>'Password changed successfully'));
                $this->get('session')->set("user_id", $user->getId());

                return $this->redirectToRoute('onde_list_article');
            }
        }
        else{
            $this->get('session')->getFlashBag()->add('notice',array('type' => 'danger', 'title' => 'Login Error !','message'=>'Passwords do not match'));
            return $this->redirectToRoute('onde_recoverForgottenPw',array('email' => $email));
        }
    }
    return $this->render('TWCOndeBundle:Admin:recoverPassword.html.twig', array('user' => $user));
  }
  public function logoutAction(Request $request){
      $request->getSession()->clear();
      return $this->redirectToRoute('twc_onde_homepage');
  }
}
