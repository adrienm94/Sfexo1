<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Exo1Controller extends AbstractController
{

    #[Route('/index', name: 'app_index')]
    public function index(): Response
    {
        return $this->render('exo1/base.html.twig', []);
    }

    #[Route('/time/now', name: 'app_date')]
    public function afficheDate(): Response
    {
        return $this->render('exo1/date.html.twig', []);
    }

    #[Route('/color/{name?black}', name: 'app_color')]
    public function afficheCouleur($name): Response
    {
        return $this->render('exo1/color.html.twig', ['name' => $name]);
    }

}
