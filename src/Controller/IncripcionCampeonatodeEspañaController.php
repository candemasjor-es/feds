<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncripcionCampeonatodeEspaĆ±aController extends AbstractController
{
    #[Route('/incripcioncampeonatodeespana', name: 'app_incripcion_campeonatode_espana')]
    public function index(): Response
    {
        return $this->render('incripcion_campeonatode_espaĆ±a/index.html.twig', [
            'controller_name' => 'IncripcionCampeonatodeEspaĆ±aController',
        ]);
    }
}
