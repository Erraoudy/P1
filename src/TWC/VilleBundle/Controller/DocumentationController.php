<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocumentationController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCVilleBundle:Documentation:index.html.twig', array(
            // ...
        ));
    }

}
