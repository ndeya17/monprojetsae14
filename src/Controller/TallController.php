<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TallController extends AbstractController
{
    #[Route('/tall', name: 'app_tall')]
    public function index(): Response
    {
        return $this->render('tall/index.html.twig', [
            'controller_name' => 'TallController',
        ]);
    }
}
