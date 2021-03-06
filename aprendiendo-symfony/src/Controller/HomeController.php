<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="home")
     */
    public function index()
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => 'Hola mundo con Symfony 4'
        ]);
    }
    public function animales(){
        $title = 'Bienvenido a la pagina de Animales';

        return $this-> render('home/animales.html.twig',['title' => $title]);
    }
}
