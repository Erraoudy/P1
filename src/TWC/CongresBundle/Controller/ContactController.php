<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function telfaxAction()
    {
        return $this->render('TWCCongresBundle:Contact:telfax.html.twig', array(
            // ...
        ));
    }

}
