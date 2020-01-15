<?php
namespace App\Controller;

use App\Form\ContactFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
class ContactController extends AbstractController
{
    /**
     * @Route("/contactez-nous", name="contact")
     */
    public function index(Request $request, \Swift_Mailer $mailer)
    {

        $form = $this->createForm(ContactFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $contactFormData = $form->getData();

            $message = (new \Swift_Message('Demande de contact reçue!'))
                ->setFrom($contactFormData['fromEmail'])
                ->setTo('destinataire@example.com')
                ->setBody($this->renderView(
                    'contact/test.html.twig'     // Version HTML du mail (une vue twig)
                ),
                'text/html'
                )
            ;

            $mailer->send($message);

            $this->addFlash('success', 'Demande de contact envoyée');
            return $this->redirectToRoute('contact');
        }

        return $this->render('contact/contact.html.twig', [
            'contactForm' => $form->createView(),
        ]);
    }
}