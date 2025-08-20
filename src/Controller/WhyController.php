<?php
// src/Controller/WhyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WhyController extends AbstractController
{
    #[Route('/why', name: 'why')]
    public function index(): Response
    {
        return $this->render('why/index.html.twig');
    }
}
