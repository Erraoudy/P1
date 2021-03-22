<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActionsController extends Controller
{
    public function protectionAction()
    {
        return $this->render('TWCOndeBundle:Actions:protection.html.twig', array(
            // ...
        ));
    }

    public function participationAction()
    {
        return $this->render('TWCOndeBundle:Actions:participation.html.twig', array(
            // ...
        ));
    }

    public function santeAction()
    {
        return $this->render('TWCOndeBundle:Actions:sante.html.twig', array(
            // ...
        ));
    }

    public function observatoireAction()
    {
        return $this->render('TWCOndeBundle:Actions:observatoire.html.twig', array(
            // ...
        ));
    }

    public function cndeAction()
    {
        return $this->render('TWCOndeBundle:Actions:cnde.html.twig', array(
            // ...
        ));
    }

    public function campagneAction()
    {
        return $this->render('TWCOndeBundle:Actions:campagne.html.twig', array(
            // ...
        ));
    }

}
