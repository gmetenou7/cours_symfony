<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

#[Route('/default')]
class DefaultController extends AbstractController
{

    #[
        Route(
            path: '/{code}',
            name: 'app_default',
            methods: ['GET'], //liste des methodes type. c'est un tableau
            schemes: ['HTTPS'], //quel protocole il attend(http, https ou les 2). c'est un tableau
        )
    ]
    public function index(Request $request, $code="lala"): Response
    {
        $code = $request->attributes->get('code');
        return $this->render('default/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }

    #[
        Route(
            path:'/home',
            name: 'homePage',
            methods: ["GET"],
            schemes: ["HTTPS","HTTP"]
        )
        ]
    public function homePage(): Response{

        return  new Response('je suis dans le home pasge');
    }
}
