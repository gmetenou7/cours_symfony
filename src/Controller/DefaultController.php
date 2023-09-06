<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{

    #[
        Route(
            '/default',
            name: 'app_default',
            methods: ['GET'], //liste des methodes type. c'est un tableau
            schemes: ['HTTP'] //quel protocole il attend(http, https ou les 2). c'est un tableau
        )
    ]
    public function index(): Response
    {

        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
