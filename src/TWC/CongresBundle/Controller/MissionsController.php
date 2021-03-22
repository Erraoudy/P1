<?php

namespace TWC\CongresBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MissionsController extends Controller
{
    public function missionsAction()
    {
        return $this->render('TWCCongresBundle:Missions:missions.html.twig', array(
            // ...
        ));
    }

    public function realisationsAction()
    {
        return $this->render('TWCCongresBundle:Missions:realisations.html.twig', array(
            // ...
        ));
    }

}
