<?php

namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMITVBundle:Dashboard:dashboard.html.twig', array(

            ));
    }

    public function playlistsAction()
    {
        return $this->render('MMITVBundle:Dashboard:playlists.html.twig', array(

        ));
    }
}
