<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCVilleBundle:Default:index.html.twig');
    }

    public function topMenuAction(){
    	return $this->render('TWCVilleBundle:Default:header.html.twig');
    }
}
