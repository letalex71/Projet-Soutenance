<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    /**
     * @Route("/profil", name="profile")
     */
    public function profile(AuthenticationUtils $authenticationUtils): Response
    {
        $form = $this->createForm(UserFormType::class, );
        $comments = $this->getUser()->getComments();

        return $this->render('user/profile.html.twig', [
            'userForm' => $form->createView(),
            'comments' => $comments,
        ]);
    }
}
