<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse ; 
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response ; 
use Symfony\Component\HttpFoundation\JsonResponse;
use TWC\OndeBundle\Entity\OndeArticle;
use TWC\OndeBundle\Entity\OndeMedia;


class espacePressController extends Controller
{
    public function documentationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $medias = $this->getDoctrine()->getManager()->getRepository('TWCOndeBundle:OndeMedia')->findAll();
        return $this->render('TWCOndeBundle:espacePress:documentation.html.twig', array('medias'=>$medias
            // ...
        ));
    }

    public function contactsAction()
    {
        return $this->render('TWCOndeBundle:espacePress:contacts.html.twig', array(
            // ...
        ));
    }

    public function presseDetailsAction(Request $req,$id)
    {
        $em = $this->getDoctrine()->getManager();

         $media = $em->getRepository('TWCOndeBundle:OndeMedia')->findOneById($id);


        return $this->render('TWCOndeBundle:espacePress:detailsPress.html.twig', array('media'=>$media
        ));
    }



}
