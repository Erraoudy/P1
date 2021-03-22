<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ActivitesController extends Controller
{
    public function presentationAction(){
        return $this->render('TWCParlementBundle:Activites:session.html.twig', array(
            // ...
        ));
    }

    public function membresAction(){
        return $this->render('TWCParlementBundle:Activites:session.html.twig', array(
            // ...
        ));
    }

    public function carteAction(){
        return $this->render('TWCParlementBundle:Activites:session.html.twig', array(
            // ...
        ));
    }
}
