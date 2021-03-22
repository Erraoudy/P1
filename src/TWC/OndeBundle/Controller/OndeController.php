<?php

namespace TWC\OndeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use TWC\OndeBundle\Entity\OndeCategories;
use TWC\OndeBundle\Entity\OndeArticle;
use TWC\OndeBundle\Entity\OndeImage;

class OndeController extends Controller
{
    public function presentationAction()
    {
        return $this->render('TWCOndeBundle:Onde:presentation.html.twig', array(
            // ...
        ));
    }

    public function missionsAction()
    {
        return $this->render('TWCOndeBundle:Onde:missions.html.twig', array(
            // ...
        ));
    }

    public function realisationsAction()
    {
        return $this->render('TWCOndeBundle:Onde:realisations.html.twig', array(
            // ...
        ));
    }

    public function plaidoyerAction()
    {
        return $this->render('TWCOndeBundle:Onde:plaidoyer.html.twig', array(
            // ...
        ));
    }

    public function publicationsAction()
    {
        return $this->render('TWCOndeBundle:Onde:publications.html.twig', array(
            // ...
        ));
    }

    public function historiqueAction()
    {
        return $this->render('TWCOndeBundle:Onde:historique.html.twig', array(
            // ...
        ));
    }

    public function organigrammeAction()
    {
        return $this->render('TWCOndeBundle:Onde:organigramme.html.twig', array(
            // ...
        ));
    }

    public function historiqueArAction()
    {
        return $this->render('TWCOndeBundle:Onde:historique2.html.twig', array(
            // ...
        ));
    }
}
