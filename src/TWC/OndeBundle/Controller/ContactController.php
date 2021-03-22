<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function formulaireAction()
    {
        return $this->render('TWCOndeBundle:Contact:formulaire.html.twig', array(
            // ...
        ));
    }

    public function telfaxAction()
    {
        return $this->render('TWCOndeBundle:Contact:telfax.html.twig', array(
            // ...
        ));
    }

}
