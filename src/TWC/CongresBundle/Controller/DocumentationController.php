<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DocumentationController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCCongresBundle:Documentation:index.html.twig', array(
            // ...
        ));
    }

}
