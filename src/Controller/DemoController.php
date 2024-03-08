<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DemoController extends AbstractController
{
    #[Route('/demo', name: 'app_demo')]
    public function index(): Response
    {
        return $this->render('demo/index.html.twig', [
            'controller_name' => 'VEIRGE',
        ]);
    }
    #[Route('/demo/{name}', name: 'app_test')]
    public function index1($name): Response
    {
        return $this->render('demo/test.html.twig', [
            'name' => $name,
        ]);
    }
    #[Route('/somme/{a}/{b}', name: 'app_somme')]
    public function somme($a,$b): Response
    {
        return $this->render('demo/somme.html.twig', [
            'a' => $a,
            'b' => $b,
            'somme' => $a+$b,
        ]);
    }
    
}