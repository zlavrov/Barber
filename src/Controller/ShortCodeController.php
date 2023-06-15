<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ShortCodeController extends AbstractController
{
    #[Route('/short/code', name: 'app_short_code')]
    public function index(): Response
    {
        return $this->render('short_code/index.html.twig', [
            'controller_name' => 'ShortCodeController',
        ]);
    }
}
