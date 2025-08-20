<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        // Données d'exemple (tu peux les remplacer par des vraies)
        $stats = [
            'itemsTracked' => 1248,
            'successRate'  => 92.5,
            'lastUpdate'   => (new \DateTime('-12 minutes'))->format('d/m/Y H:i'),
            'nextStep'     => 'Audit hebdomadaire',
        ];

        $tasks = [
            ['title' => 'Synchroniser les données', 'status' => 'En cours'],
            ['title' => 'Générer le rapport PDF', 'status' => 'À faire'],
            ['title' => 'Valider les anomalies', 'status' => 'Terminé'],
        ];

        return $this->render('home/index.html.twig', [
            'stats' => $stats,
            'tasks' => $tasks,
        ]);
    }
}
