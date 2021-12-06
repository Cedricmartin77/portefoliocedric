<?php

namespace App\Controller;

use App\Repository\AccueilRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(AccueilRepository $accueilRepository ): Response
    {
        $accueil = $accueilRepository->findBy([],['id' => 'DESC'],6);
        return $this->render('accueil/index.html.twig', [
            'accueil' => $accueil,
        ]);
    }
}
