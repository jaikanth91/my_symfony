<?php

namespace ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
//        echo phpinfo();exit;
        $em = $this->getDoctrine()->getManager();
       $result = $em->getRepository('ProductBundle:Product')->findAllOrderedByName();
          echo "<pre>";print_r($result);exit;      
        return $this->render('ProductBundle:Default:index.html.twig');
    }
}
