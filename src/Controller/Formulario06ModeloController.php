<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Formulario06ModeloController extends AbstractController
{
    #[Route('/formulario06modelo', name: 'app_formulario06modelo')]
    public function index(): Response
    {
        return $this->render('formulario06_modelo/index.html.twig', [
            'controller_name' => 'Formulario06ModeloController',
        ]);
    }
}
