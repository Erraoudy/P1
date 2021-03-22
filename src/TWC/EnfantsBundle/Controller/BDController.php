<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BDController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:BD:index.html.twig', array(
            // ...
        ));
    }

}
