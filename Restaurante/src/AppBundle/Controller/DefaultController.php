<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
     

    public function indexAction(Request $request)
    {
        return $this->render('default/index.html.twig');
            
        
    }
     /** 
    * @Route("/restaurante", name="restaurante");
    */
     

    public function restauranteAction(Request $request)
    {
         return $this->render('default/restaurante.html.twig');
    }
    /** 
    * @Route("/restaurante/{$sede}", name="sedes");
    */
     

    public function sedesAction(Request $request, $sede)
    {
         return $this->render('default/restaurante.html.twig',['sede'=>$sede]);
    }
    
}





