<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Watchlist;
use App\Validator\WatchlistValidator;
use App\Entity\User;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class ApiController extends AbstractController
{
    /**
     * [Cette servira à récupérer les données POST envoyées par javascript,
     * les vérifier puis les ajouter à la base de donnée]
     * 
     * @Route("/api/form-check", name="form_check")
     */
    public function formCheck(Request $request, ValidatorInterface $validator)
    {

    	$data = $request->request->all();

    	$data['user'] = $this->getUser();

    	$watchlistValidator = new WatchlistValidator();

    	$errors = $validator->validate($watchlistValidator);

    	if (count($errors) > 0){
    		$errors = (string)$errors;
    		return $this->json(['status' =>  $errors]);
    	}
   
    	$watchlist = new Watchlist($data);

    	$watchlist->setTitle($data['title']);
        $watchlist->setStatus($data['status']);
        $watchlist->setScore($data['score']);
        $watchlist->setPosterPath($data['posterPath']);
        $watchlist->setType($data['type']);
        $watchlist->setItemId($data['itemID']);
        $watchlist->setUser($data['user']);


    	$em = $this->getDoctrine()->getManager();
    	$em->persist($watchlist);
    	$em->flush();

    	return $this->json(['status' => 'success']);

    }

    /** [ itemId = int, type = 's' | 'm' ]
     * @Route("/api/uncheck", name="uncheck")
     */
    public function Uncheck(Request $request)
    {
        $data = $request->query->all();

        $data['user'] = $this->getUser();

        $entityManager = $this->getDoctrine()->getManager();

        $watchlistRepository = $this->getDoctrine()->getRepository(Watchlist::class);
       

        $foundWatchlist = $watchlistRepository->findOneBy(['item_id' => ['itemID'], 'type' => 's' | 'm']); 

        return $this->json(['status' => 'success']);
    }
}
