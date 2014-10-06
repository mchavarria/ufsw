<?php

namespace ufsw\DataBaseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('DataBaseBundle:Default:index.html.twig', array('name' => $name));
    }
}
