<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Comment;
use App\Entity\Watchlist;
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
     * @Route("/series/{id}", name="display_show")
     */
    public function displayShow($id, Request $request)
    {
        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['itemId' => $id, 'type' => 's'], ['publicationDate' => 'desc']);
        $commentToAdd = new Comment();
        $commentForm = $this->createForm(CommentFormType::class, $commentToAdd);
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $commentToAdd
                ->setType('s')
                ->setItemId($id)
                ->setPublicationDate(new \DateTime('now'))
                ->setAuthor( $this->getUser() );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentToAdd);
            $entityManager->flush();
        }

        return $this->render('main/show-view.html.twig',[
            'comments' => $comments,
            'commentForm' => $commentForm->createView(),
            'id' => $id
            ]);
        }

    /**
     * @Route("/films/{id}", name="display_movie")
     */
    public function displayMovie($id, Request $request)
    {

        $comments = $this->getDoctrine()->getRepository(Comment::class)->findBy(['itemId' => $id, 'type' => 'm'], ['publicationDate' => 'desc']);

        $commentToAdd = new Comment();
        $commentForm = $this->createForm(CommentFormType::class, $commentToAdd);
        $commentForm->handleRequest($request);

        if ($commentForm->isSubmitted() && $commentForm->isValid()) {
            $commentToAdd
                ->setType('m')
                ->setItemId($id)
                ->setPublicationDate(new \DateTime('now'))
                ->setAuthor( $this->getUser() );

            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commentToAdd);
            $entityManager->flush();
            $this->addFlash('success', 'Article Created! Knowledge is power!');
        }

        return $this->render('main/movie-view.html.twig',[
            'comments' => $comments,
            'commentForm' => $commentForm->createView(),
            'id' => $id,
            ]);
        }
    /**
     * @Route("/personnes/{id}", name="display_people")
     */
    public function displayPeople()
    {
        return $this->render('main/people-view.html.twig');
    }
    /**
     * @Route("/profil/watchlist/{id}", name="watchlist")
     */
    public function watchlist(User $user)
    {   

        $watchlistRepo = $this->getDoctrine()->getRepository(Watchlist::class);



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
