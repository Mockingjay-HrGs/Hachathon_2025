<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/histoire', name: 'histoire_')]
class HistoireController extends AbstractController
{
    #[Route('/croyances', name: 'croyances')]
    public function croyances(): Response
    {
        return $this->render('histoire/croyances.html.twig');
    }

    #[Route('/engagements', name: 'engagements')]
    public function engagements(): Response
    {
        return $this->render('histoire/engagements.html.twig');
    }

    #[Route('/histoire', name: 'histoire')]
    public function histoire(): Response
    {
        return $this->render('histoire/histoire.html.twig');
    }

    #[Route('/metiers', name: 'metiers')]
    public function metiers(): Response
    {
        return $this->render('histoire/metiers.html.twig');
    }
}


