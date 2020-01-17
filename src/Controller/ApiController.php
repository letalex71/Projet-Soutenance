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

    /**
     * [cette fonction sert à envoyer la watchlist d'une personne]
     * @Route ("api/send-watchlist", name="send_watchlist")
     */
    public function sendWatchlist(Request $request)
    {	


    	$watchlistRepo = $this->getDoctrine()->getRepository(Watchlist::class);

    	$items = $watchlistRepo->findByUser($request->query->get('user'));

    	$itemList = [
    		'm' => [''],

    		't' => ['']
    	];

    	foreach ($items as $item)
    	{
    		if ($item->getType() == 'm')
    			$itemList['m'][] = $item->getItemId();
    		else
    			$itemList['t'][] = $item->getItemId();
    	}

    	return $this->json($itemList);
    }

    /** [ Cette fonction supprime un élément de la watchlist ]
     * @Route("/api/delete-item", name="delete_item")
     */
    public function deleteItem(Request $request)
    {
        $data = $request->request->all();

        $data['user'] = $this->getUser();

        dump($data);
        
        $entityManager = $this->getDoctrine()->getManager();

        $watchlistRepository = $this->getDoctrine()->getRepository(Watchlist::class);
       

        $watchlistToDelete = $watchlistRepository->findOneBy(['itemId' => $data['itemId'], 'type' => $data['type'], 'user' => $data['user']->getId()]); 

        
        if($watchlistToDelete == NULL ){
            return $this->json(['status' => 'error']);
            
        }else{
            
            $entityManager->remove($watchlistToDelete);
    
            $entityManager->flush();
            
            return $this->json(['status' => 'success']);

        }
    }
}
