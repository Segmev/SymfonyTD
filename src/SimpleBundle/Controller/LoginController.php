<?php

namespace SimpleBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LoginController extends Controller
{
    /**
     * @Route("/login")
     */
    public function loginAction()
    {
        return $this->render('SimpleBundle:Default:index.html.twig');
    }

    /**
     * @Route("/register")
     */
    public function registerAction()
    {
        return $this->render('SimpleBundle:Default:index.html.twig');
    }

}
