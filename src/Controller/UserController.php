<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Comment;
use App\Form\UserPasswordType;
use App\Form\UserCustomizationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class UserController extends AbstractController
{
    /**
     * @Route("/profil", name="profile")
     */
    public function profile(AuthenticationUtils $authenticationUtils, Request $request, UserPasswordEncoderInterface $passwordEncoder): Response
    {
        if (!$this->getUser()) {
            return $this->redirectToRoute('home');
        }
        $user = $this->getUser();
        $userPasswordForm = $this->createForm(UserPasswordType::class, $user);
        $userPasswordForm->handleRequest($request);

        if ($userPasswordForm->isSubmitted() && $userPasswordForm->isValid()) {
            // encode the plain password
            $user->setPassword(
                $passwordEncoder->encodePassword(
                    $user,
                    $userPasswordForm->get('password')->getData()
                )
            );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

        }

        $userCustomizationForm = $this->createForm(UserCustomizationType::class, $user);
        $userCustomizationForm->handleRequest($request);
        if ($userCustomizationForm->isSubmitted() && $userCustomizationForm->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

        }
        $comments = $this->getUser()->getComments();
        return $this->render('user/profile.html.twig', [
            'userPasswordForm' => $userPasswordForm->createView(),
            'userCustomizationForm' => $userCustomizationForm->createView(),
            'comments' => $comments,
        ]);
    }
}
