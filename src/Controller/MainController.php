<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Comment;
use App\Form\CommentFormType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Routing\Annotation\Route;
use \DateTime;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        return $this->render('main/index.html.twig');
    }
    /**
     * @Route("/rechercher", name="search")
     */
    public function search()
    {

        return $this->render('main/search.html.twig', [
            "date" => new DateTime()
        ]);
    }
    /**
     * @Route("/series/{id}/", name="display_show")
     */
    public function displayShow($id)
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['itemId' => $id, 'type' => 'series'], ['publicationDate' => 'desc']);
        $comment = new Comment();

        return $this->render('main/show-view.html.twig',[
            'comments' => $form,
            "id" => $id
            ]);
        }

        /**
     * @Route("/films/{id}/", name="display_movie")
     */
    public function displayMovie($id, Request $request)
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['itemId' => $id, 'type' => 'm'], ['publicationDate' => 'desc']);
        dump($comments);
        $commentForm = $this->createForm(CommentFormType::class);
        $commentForm->handleRequest($request);
        if ($commentForm->isSubmitted() && $commentForm->isValid()) {

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->flush();

        }

        return $this->render('main/movie-view.html.twig',[
            'comments' => $comments,
            'commentForm' => $commentForm->createView(),
            'id' => $id
            ]);
        }
    /**
     * @Route("/personnes", name="display_people")
     */
    public function displayPeople()
    {
        return $this->render('main/people-view.html.twig');
    }
    /**
     * @Route("/profil/watchlists", name="watchlists")
     */
    public function watchlists()
    {
        return $this->render('main/watchlist.html.twig');
    }
}
