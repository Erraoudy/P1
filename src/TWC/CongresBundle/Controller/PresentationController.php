<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PresentationController extends Controller
{
    public function messageAction()
    {
        return $this->render('TWCCongresBundle:Presentation:message.html.twig', array(
            // ...
        ));
    }

    public function royaleAction()
    {
        return $this->render('TWCCongresBundle:Presentation:message.html.twig', array(
            // ...
        ));
    }

    public function congresAction()
    {
        return $this->render('TWCCongresBundle:Presentation:message.html.twig', array(
            // ...
        ));
    }

}
