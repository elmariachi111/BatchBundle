<?php

namespace  Elmariachi111\BatchBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class JobsController extends Controller
{
    public function indexAction()
    {
        return new Response("Hello");
    }
}
