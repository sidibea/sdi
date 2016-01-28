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

    public function aboutAction(){

        return $this->render('SDIFrontBundle::about.html.twig');
    }
    public function galleryAction(){

        return $this->render('SDIFrontBundle::gallery.html.twig');
    }
    public function testimonialsAction(){

        return $this->render('SDIFrontBundle::testimonials.html.twig');
    }
    public function contactAction(){

        return $this->render('SDIFrontBundle::contact.html.twig');
    }
}