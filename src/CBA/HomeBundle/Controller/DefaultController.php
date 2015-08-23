<?php

namespace CBA\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CBAHomeBundle:Default:index.html.twig');
    }
}
