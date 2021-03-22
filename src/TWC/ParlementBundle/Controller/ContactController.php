<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function telfaxAction()
    {
        return $this->render('TWCParlementBundle:Contact:telfax.html.twig', array(
            // ...
        ));
    }

}
