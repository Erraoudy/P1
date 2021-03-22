<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocumentationController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCParlementBundle:Documentation:index.html.twig', array(
            // ...
        ));
    }

}
