<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 19/1/16
 * Time: 6:28 AM
 */

namespace SDI\FrontBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FrontController extends Controller{

    public function indexAction(){

        return $this->render("SDIFrontBundle::index.html.twig");
    }

}