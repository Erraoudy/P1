<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ColoriageController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:Coloriage:index.html.twig', array(
            // ...
        ));
    }

}
