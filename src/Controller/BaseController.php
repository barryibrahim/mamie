<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\AjoutCafeType;


final class BaseController extends AbstractController
{
    #[Route('/', name: 'app_accueil')]
    public function index(): Response
    {
        return $this->render('base/index.html.twig', []);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        $form = $this->createForm(AjoutCafeType::class);
        return $this->render('base/contact.html.twig', [
            'form' => $form->createView()
            
        ]);
    }
}
