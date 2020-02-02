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
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Mot de passe modifié');
        }
        $userCustomizationForm = $this->createForm(UserCustomizationType::class, $user);
        $userCustomizationForm->handleRequest($request);
        if ($userCustomizationForm->isSubmitted() && $userCustomizationForm->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();
            $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Informations personnelles modifiées, <a href="/profil">cliquez ici pour voir les changements</a>');
        }
        $comments = $this->getUser()->getComments();
        return $this->render('user/profile.html.twig', [
            'userPasswordForm' => $userPasswordForm->createView(),
            'userCustomizationForm' => $userCustomizationForm->createView(),
            'comments' => $comments,
        ]);
    }


    /**
     * @Route("/profil/watchlist/{id}", name="watchlist")
     */
    public function watchlist(User $user)
    {
        $watchlistRepo = $this->getDoctrine()->getRepository(Watchlist::class);
        dump($user);
        $watchlist = $watchlistRepo->findByUser($user);
        $movieIndex = 0;
        $tvIndex = 0;
        $watchlistOutput = [
            'm' => [],
            't' => []
        ];
        foreach ($watchlist as $item)
        {
            if ($item->getType() == 'm')
            {
                $watchlistOutput['m'][$movieIndex]['title'] = $item->getTitle(); 
                $watchlistOutput['m'][$movieIndex]['posterPath'] = $item->getPosterPath();
                $watchlistOutput['m'][$movieIndex]['score'] = $item->getScore();
                $watchlistOutput['m'][$movieIndex]['itemId'] = $item->getItemId();
                $watchlistOutput['m'][$movieIndex++]['status'] = $item->getStatus();
            }
            else
            {
                $watchlistOutput['t'][$tvIndex]['title'] = $item->getTitle(); 
                $watchlistOutput['t'][$tvIndex]['posterPath'] = $item->getPosterPath();
                $watchlistOutput['t'][$tvIndex]['sscore'] = $item->getScore();
                $watchlistOutput['t'][$tvIndex]['itemId'] = $item->getItemId();
                $watchlistOutput['t'][$tvIndex++]['status'] = $item->getStatus();
            }
        }
        dump($watchlistOutput);
        return ($user == $this->getUser()) ?
        $this->render('main/watchlist.html.twig', [
            'watchlist' => $watchlistOutput
        ])
        :
        $this->render('main/watchlist.html.twig', [
            'watchlist' => $watchlistOutput,
            'user' => $user->getId()
        ]);
    }
}
