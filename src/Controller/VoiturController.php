<?php

namespace App\Controller;

use App\Entity\Cars;
use App\Entity\Hours;
use Symfony\Component\DomCrawler\Form;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Test\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoiturController extends AbstractController

{
    #[Route('/voitur', name: 'app_voitur')]
    public function index(EntityManagerInterface $entityManager ): Response 
    {
                $form = $entityManager->getRepository(form::class)->findAll();
        
        return $this->render('voitur/index.html.twig', [
            'controller_name' => 'VoiturController',
            'Form' => $form,
        ]);
    }
}
