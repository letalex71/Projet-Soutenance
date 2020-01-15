<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Watchlist;
use App\Entity\User;

class ApiController extends AbstractController
{
    /**
     * @Route("/api/form-check", name="form_check")
     */
    public function formCheck(Request $request)
    {
    	
    	$test = $request->request->all();

    	return $this->json($test);

    }
}
