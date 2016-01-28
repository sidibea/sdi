<?php

namespace SDI\FrontBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SDIFrontBundle:Default:index.html.twig');
    }
}
