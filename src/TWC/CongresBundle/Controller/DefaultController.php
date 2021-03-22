<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCCongresBundle:Default:index.html.twig');
    }

    public function topMenuAction(){
    	return $this->render('TWCCongresBundle:Default:header.html.twig');
    }
}
