<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ParlementController extends Controller
{
    public function presentationAction()
    {
        return $this->render('TWCParlementBundle:Parlement:presentation.html.twig', array(
            // ...
        ));
    }

    public function roleAction()
    {
        return $this->render('TWCParlementBundle:Parlement:role.html.twig', array(
            // ...
        ));
    }

    public function compositionAction()
    {
        return $this->render('TWCParlementBundle:Parlement:composition.html.twig', array(
            // ...
        ));
    }

    public function commissionsAction()
    {
        return $this->render('TWCParlementBundle:Parlement:commissions.html.twig', array(
            // ...
        ));
    }

}
