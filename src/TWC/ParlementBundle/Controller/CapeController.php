<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CapeController extends Controller
{
    public function presentationAction()
    {
        return $this->render('TWCParlementBundle:Cape:presentation.html.twig', array(
            // ...
        ));
    }

    public function reseauAction()
    {
        return $this->render('TWCParlementBundle:Cape:reseau.html.twig', array(
            // ...
        ));
    }

}
