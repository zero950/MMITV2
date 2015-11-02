<?php
namespace MMITVBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class AgendaController extends Controller
{
    public function indexAction()
    {
        return $this->render('MMITVBundle:Default:agenda.html.twig');
    }
}