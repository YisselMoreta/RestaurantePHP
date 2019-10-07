<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;


class ApiController 
{
    /**
     * @Route("/api/almacenes", name="listaAlmacenes", methods={"GET"}))
     */
     

    public function listaAlmacenesAction(Request $request)
    {
        return $response = new JsonResponse(['data' => 123]);
            
        
    }
    
    
}





