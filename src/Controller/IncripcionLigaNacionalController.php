<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IncripcionLigaNacionalController extends AbstractController
{
    #[Route('/incripcionliganacional', name: 'app_incripcion_liga_nacional')]
    public function index(): Response
    {
        return $this->render('incripcion_liga_nacional/index.html.twig', [
            'controller_name' => 'IncripcionLigaNacionalController',
        ]);
    }
}
