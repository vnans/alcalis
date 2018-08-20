<?php

namespace Alcalis\websiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller 
{
    public function indexAction() 
    {
        return $this->render('AlcaliswebsiteBundle:Default:index.html.twig');
    }
    
}
