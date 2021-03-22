<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:Presentation:index.html.twig', array(
            // ...
        ));
    }

}
