<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TelechargementController extends Controller
{
    public function formulaireAction()
    {
        return $this->render('TWCEnfantsBundle:Telechargement:formulaire.html.twig', array(
            // ...
        ));
    }

    public function brochureAction()
    {
        return $this->render('TWCEnfantsBundle:Telechargement:brochure.html.twig', array(
            // ...
        ));
    }

    public function conventionAction()
    {
        return $this->render('TWCEnfantsBundle:Telechargement:convention.html.twig', array(
            // ...
        ));
    }

}
