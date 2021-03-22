<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class EditionsController extends Controller
{
    public function listeAction()
    {
        return $this->render('TWCCongresBundle:Editions:liste.html.twig', array(
            // ...
        ));
    }

}
