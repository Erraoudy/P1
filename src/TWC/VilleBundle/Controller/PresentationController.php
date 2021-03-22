<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function discoursAction()
    {
        return $this->render('TWCVilleBundle:Presentation:discours.html.twig', array(
            // ...
        ));
    }

    public function phenomeneAction()
    {
        return $this->render('TWCVilleBundle:Presentation:phenomene.html.twig', array(
            // ...
        ));
    }

    public function roleAction()
    {
        return $this->render('TWCVilleBundle:Presentation:role.html.twig', array(
            // ...
        ));
    }

}
