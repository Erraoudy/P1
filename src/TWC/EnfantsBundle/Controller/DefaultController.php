<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:Default:index.html.twig');
    }

    public function topMenuAction(){
    	return $this->render('TWCEnfantsBundle:Default:header.html.twig');
    }
}
