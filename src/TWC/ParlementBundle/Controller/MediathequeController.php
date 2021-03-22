<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediathequeController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCParlementBundle:Mediatheque:index.html.twig', array(
            // ...
        ));
    }

}
