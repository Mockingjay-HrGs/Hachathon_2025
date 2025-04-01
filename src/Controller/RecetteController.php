<?php

namespace App\Controller;

use App\Repository\RecetteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecetteController extends AbstractController
{
    #[Route('/recettes', name: 'recettes_index')]
    public function index(RecetteRepository $recetteRepo): Response
    {
        $recettes = $recetteRepo->findAll();

        return $this->render('recette/index.html.twig', [
            'recettes' => $recettes
        ]);
    }

    #[Route('/recette/{id}', name: 'recette_detail')]
    public function detail(\App\Entity\Recette $recette): Response
    {
        return $this->render('recette/detail.html.twig', [
            'recette' => $recette
        ]);
    }
}
