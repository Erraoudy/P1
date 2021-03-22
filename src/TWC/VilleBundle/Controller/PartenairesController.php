<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PartenairesController extends Controller
{
    public function unicefAction()
    {
        return $this->render('TWCVilleBundle:Partenaires:unicef.html.twig', array(
            // ...
        ));
    }

    public function gouvernementAction()
    {
        return $this->render('TWCVilleBundle:Partenaires:gouvernement.html.twig', array(
            // ...
        ));
    }

    public function cgluAction()
    {
        return $this->render('TWCVilleBundle:Partenaires:cglu.html.twig', array(
            // ...
        ));
    }

    public function adherentesAction()
    {
        return $this->render('TWCVilleBundle:Partenaires:adherentes.html.twig', array(
            // ...
        ));
    }

}
