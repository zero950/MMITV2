<?php

namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
     return $this->render('MMITVBundle:Default:index.html.twig');
    }
}
