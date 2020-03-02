<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository('ProductBundle:Product')->findAllOrderedByName();
        
        return $this->render('ProductBundle:Default:index.html.twig');
    }

}
