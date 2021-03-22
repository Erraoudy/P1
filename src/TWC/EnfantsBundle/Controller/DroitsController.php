<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DroitsController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:Droits:index.html.twig', array(
            // ...
        ));
    }

}
