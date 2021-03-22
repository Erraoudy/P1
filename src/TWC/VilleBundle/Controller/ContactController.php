<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactController extends Controller
{
    public function formulaireAction()
    {
        return $this->render('TWCVilleBundle:Contact:formulaire.html.twig', array(
            // ...
        ));
    }

    public function telfaxAction()
    {
        return $this->render('TWCVilleBundle:Contact:telfax.html.twig', array(
            // ...
        ));
    }

}
