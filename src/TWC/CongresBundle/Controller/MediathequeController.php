<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MediathequeController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCCongresBundle:Mediatheque:index.html.twig', array(
            // ...
        ));
    }

}
