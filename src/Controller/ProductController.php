<?php

namespace App\Controller;

use App\Entity\ProduitsInfo;
use App\Repository\ProduitsInfoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/salades', name: 'produits_salades')]
    public function salades(ProduitsInfoRepository $repo): Response
    {
        $produits = $repo->findBy(['type' => 'salade']);

        return $this->render('product/salades.html.twig', [
            'produits' => $produits
        ]);
    }

    #[Route('/produit/{id}', name: 'produit_detail')]
    public function detail(ProduitsInfo $produit): Response
    {
        return $this->render('product/detail.html.twig', [
            'produit' => $produit
        ]);
    }

    #[Route('/produit/{id}/ajax', name: 'produit_detail_ajax')]
    public function ajaxDetail(ProduitsInfo $produit): Response
    {
        return $this->render('product/_modal_detail.html.twig', [
            'produit' => $produit
        ]);
    }

    #[Route('/herbes', name: 'produits_herbes')]
    public function herbes(ProduitsInfoRepository $repo): Response
    {
        $produits = $repo->findBy(['type' => 'herbe']);

        return $this->render('product/herbes.html.twig', [
            'produits' => $produits
        ]);
    }

}
