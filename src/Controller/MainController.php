<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\User;
use App\Entity\Comments;
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
     * @Route("/series/{id}-{name}/", name="display_show")
     */
    public function displayShow($id, $name)
    {
        $comments = $this->getDoctrine()->getRepository(Comments::class)->findBy(['itemId' => $id, 'type' => 's'], ['publicationDate' => 'desc']);
        return $this->render('main/show-view.html.twig',[
            'comments' => $comments,
            "id" => $id
            ]);
        }

        /**
     * @Route("/films/{id}-{name}/", name="display_movie")
     */
    public function displayMovie($id, $name)
    {
        $comments = $this->getDoctrine()->getRepository(Comments::class)->findBy(['itemId' => $id, 'type' => 'm'], ['publicationDate' => 'desc']);
        return $this->render('main/movie-view.html.twig',[
            'comments' => $comments,
            "id" => $id
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
