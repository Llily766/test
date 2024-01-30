<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Entity\Hours;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FiltresController extends AbstractController
{
    #[Route('/filtres', name: 'app_filtres')]
    public function index(EntityManagerInterface $entityManager ): Response 
    {
        $Hours = $entityManager->getRepository(Hours::class)->findAll();
        $Cars = $entityManager->getRepository(Cars::class)->findAll();
        return $this->render('filtres/index.html.twig', [
            'controller_name' => 'OccasionController',
            'Cars' => $Cars,
            'Hours'=> $Hours,
        
        ]);
    }
}
