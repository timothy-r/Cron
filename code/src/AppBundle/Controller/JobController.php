<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobController extends Controller
{
    /**
     * @Route("/jobs", name="jobs")
     */
    public function indexAction()
    {
        return $this->render('default/jobs.html.twig');
    }
}
