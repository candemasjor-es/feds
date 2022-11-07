<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FutbolsalaController extends AbstractController
{
    #[Route('/Futbolsala', name: 'app_futbolsala')]
    public function index(): Response
    {
        return $this->render('futbolsala/index.html.twig', [
            'controller_name' => 'FutbolsalaController',
        ]);
    }
}
