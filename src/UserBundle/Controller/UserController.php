<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    /**
     * Matches /user/register exactly
     *
     * @Route("/user/register", name="user_register")
     */
    public function registerAction()
    {
        return $this->render('@UserBundle/User/register.html.twig');
    }

    /**
     * Matches /user exactly
     *
     * @Route("/user", name="user_register")
     */
    public function loginAction()
    {
        return $this->render('@UserBundle/User/login.html.twig');
    }
}