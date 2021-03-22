<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CampagneController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCVilleBundle:Campagne:index.html.twig', array(
            // ...
        ));
    }

}
