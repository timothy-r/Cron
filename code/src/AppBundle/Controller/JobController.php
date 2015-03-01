<?php namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class JobController extends Controller
{

    public function indexAction()
    {
        return $this->render('default/jobs.html.twig');
    }

    public function getAction($job_id)
    {
        return 'job ' . $job_id;
    }
}
