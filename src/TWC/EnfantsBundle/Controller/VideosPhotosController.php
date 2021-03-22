<?php

namespace TWC\EnfantsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class VideosPhotosController extends Controller
{
    public function indexAction()
    {
        return $this->render('TWCEnfantsBundle:VideosPhotos:index.html.twig', array(
            // ...
        ));
    }

}
