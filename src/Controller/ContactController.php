<?php

namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contactez-nous", name="contact")
     */
    public function index()
    {   
        $form = $this->createForm(ContactFormType::class);
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form,
        ]);
    }
}
