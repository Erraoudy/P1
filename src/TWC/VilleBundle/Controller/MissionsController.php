<?php

namespace TWC\VilleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MissionsController extends Controller
{
    public function missionsAction()
    {
        return $this->render('TWCVilleBundle:Missions:missions.html.twig', array(
            // ...
        ));
    }

    public function objectifsAction()
    {
        return $this->render('TWCVilleBundle:Missions:objectifs.html.twig', array(
            // ...
        ));
    }

}
