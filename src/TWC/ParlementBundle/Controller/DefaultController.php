<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCParlementBundle:Default:index.html.twig');
    }
    
    public function topMenuAction(){
    	return $this->render('TWCParlementBundle:Default:header.html.twig');
    }
}
