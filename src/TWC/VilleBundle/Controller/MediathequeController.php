<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediathequeController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCVilleBundle:Mediatheque:index.html.twig', array(
            // ...
        ));
    }

}
