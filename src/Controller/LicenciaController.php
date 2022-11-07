<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LicenciaController extends AbstractController
{
    #[Route('/licencia', name: 'app_licencia')]
    public function index(): Response
    {
        return $this->render('licencia/index.html.twig', [
            'controller_name' => 'LicenciaController',
        ]);
    }
}
