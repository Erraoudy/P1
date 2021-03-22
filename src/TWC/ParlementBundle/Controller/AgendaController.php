<?php

namespace TWC\ParlementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AgendaController extends Controller
{
    public function presentationAction()
    {
        return $this->render('TWCParlementBundle:Agenda:presentation.html.twig', array(
            // ...
        ));
    }

    public function prioritesAction()
    {
        return $this->render('TWCParlementBundle:Agenda:priorites.html.twig', array(
            // ...
        ));
    }

    public function agendaAction()
    {
        return $this->render('TWCParlementBundle:Agenda:agenda.html.twig', array(
            // ...
        ));
    }

}
