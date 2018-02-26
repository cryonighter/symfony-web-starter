<?php

namespace App\Controller;

use LogicException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     *
     * @return Response
     *
     * @throws LogicException
     */
    public function index(): Response
    {
        return $this->render('default/index.html.twig');
    }
}
