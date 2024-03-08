<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render(view : 'home/index.html.twig');
    }
     #[Route('/second', name: 'app_second')]
    public function second(): Response
    {
        return $this->render(view : 'home/second.html.twig');
    }
}