<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JeuxController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:Jeux:index.html.twig', array(
            // ...
        ));
    }

}
