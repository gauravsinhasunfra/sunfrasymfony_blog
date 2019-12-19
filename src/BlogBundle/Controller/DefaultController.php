<?php

namespace BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * Matches / exactly
     *
     * @Route("/", name="blog_list")
     */
    public function indexAction()
    {
        return $this->render('@BlogBundle/Default/index.html.twig');
    }
}
