<?php

namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('FOSUserBundle:Profile:show.html.twig', array(
                // ...
            ));
    }
}