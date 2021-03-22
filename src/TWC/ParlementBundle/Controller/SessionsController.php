<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SessionsController extends Controller
{
    public function presentationRAction(){
        return $this->render('TWCParlementBundle:Sessions:regional.html.twig', array(
            // ...
        ));
    }

    public function activitesRAction(){
        return $this->render('TWCParlementBundle:Sessions:regional.html.twig', array(
            // ...
        ));
    }

    public function sessionRAction(){
        return $this->render('TWCParlementBundle:Sessions:regional.html.twig', array(
            // ...
        ));
    }

    public function presentationNAction(){
        return $this->render('TWCParlementBundle:Sessions:national.html.twig', array(
            // ...
        ));
    }

    public function activitesNAction(){
        return $this->render('TWCParlementBundle:Sessions:national.html.twig', array(
            // ...
        ));
    }

    public function sessionNAction(){
        return $this->render('TWCParlementBundle:Sessions:national.html.twig', array(
            // ...
        ));
    }

}
