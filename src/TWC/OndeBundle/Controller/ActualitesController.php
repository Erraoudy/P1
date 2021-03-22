<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use TWC\OndeBundle\Entity\OndeArticle;

class ActualitesController extends Controller
{
    public function indexAction(Request $req)
    {
    	$em = $this->getDoctrine()->getManager();
        $articles = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findBy(array(),array('creationDate' => 'DESC'));
        return $this->render('TWCOndeBundle:Actualites:index.html.twig', array('articles'=>$articles));
    }

    public function detailsAction(Request $req,$id)
    {
        $em = $this->getDoctrine()->getManager();

         $article = $em->getRepository('TWCOndeBundle:OndeArticle')->findOneById($id);

         $articles = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeArticle')->findBy(array(),array('creationDate' => 'DESC'), 3, 0);

        return $this->render('TWCOndeBundle:Actualites:details.html.twig', array('article'=>$article, 'articles'=>$articles
        ));
    }

}
