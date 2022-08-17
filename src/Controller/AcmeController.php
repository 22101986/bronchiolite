<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AcmeController extends AbstractController
{
    #[Route('/acme', name: 'app_acme')]
    public function index(): Response
    {
        return $this->render('acme/index.html.twig', [
            'controller_name' => 'AcmeController',
        ]);
    }
}
