<?php

namespace Alcalis\websiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class vitrineController extends Controller
{
    /**
     * @Route("/accueil")
     */
    public function accueilAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:index.html.twig');

        return new Response($content);
    }
    public function indexAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:index.html.twig');

        return new Response($content);
    }

public function contactAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:contact.html.twig');

        return new Response($content);
    }

public function atconnectworldAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:atconnectworld.html.twig');

        return new Response($content);
    }

public function CellschoolAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:Cellschool.html.twig');

        return new Response($content);
    }

public function packwebAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:packweb.html.twig');

        return new Response($content);
    }

public function presentationAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:presentation.html.twig');

        return new Response($content);
    }

public function referenceAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:reference.html.twig');

        return new Response($content);
    }
public function securiteAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:securite.html.twig');

        return new Response($content);
    }

public function servicesAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:services.html.twig');

        return new Response($content);
    }

public function touslesservicesAction()

    {
    	$content =$this
    	->get('templating')
    	->render('AlcaliswebsiteBundle:vitrine:touslesservices.html.twig');

        return new Response($content);
    }

}
