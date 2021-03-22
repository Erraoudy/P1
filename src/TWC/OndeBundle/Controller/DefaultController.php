<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        // $medias = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findAll();
        $articles=$this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findBy(array(),array('id' => 'desc'),6 ,0);


        // $newArticles=$this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findBy(array(),array('id' => 'desc'));
        // return $this->render('TWCOndeBundle:Default:index.html.twig',array('medias'=>$medias,'articles'=>$articles,'newArticles'=>$newArticles));
        return $this->render('TWCOndeBundle:Default:index.html.twig',array('articles'=>$articles));
    }
    
    public function index2Action()
    {
        return $this->render('TWCOndeBundle:Default:index2.html.twig');
    }

    public function etudesAction()
    {
        return $this->render('TWCOndeBundle:Publications:Etudes.html.twig');
    }

    public function photosAction()
    {
        return $this->render('TWCOndeBundle:Publications:PhotosVideos.html.twig');
    }

    public function topMenuAction(){
    	return $this->render('TWCOndeBundle:Default:header.html.twig');
    }
    public function topMenuArAction(){
    	return $this->render('TWCOndeBundle:Default:headerAr.html.twig');
    }

    public function footerAction(){
    	return $this->render('TWCOndeBundle:Default:footer.html.twig');
    }
}
