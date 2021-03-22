<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PortailEnfantController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCOndeBundle:PortailEnfant:index.html.twig', array(
            // ...
        ));
    }

}
