<?php

namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DirectController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMITVBundle:Direct:direct.html.twig', array(
                // ...
            ));    }

}
