<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Restaurante;
use AppBundle\Entity\Platos;
use Doctrine\Common\Collections\ArrayCollection;


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
        $repository = $this->getDoctrine()->getRepository(Restaurante::class);
        $restaurantes = $repository->findAll();
        dump($restaurantes);
         return $this->render('default/restaurante.html.twig',['restaurantes'=>$restaurantes]);
    }
    /** 
    * @Route("/restaurante/{$sede}", name="sedes");
    */
     

    public function sedesAction(Request $request, $sede)
    {
        
         return $this->render('default/restaurante.html.twig',['sede'=>$sede]);
    }
    /** 
    * @Route("restaurante/contacto", name="contacto");
    */
     

    public function contactoAction(Request $request)
    {
        
         return $this->render('default/contacto.html.twig');
    }

    // /** 
    // * @Route("/platos", name="platos");
    // */
     

    // public function platosAction(Request $request)
    // {
    //     $repository = $this->getDoctrine()->getRepository(Restaurante::class);
    //     $restaurante = $repository->find(1);

    //     $platoFirst = new Platos();
    //     $platoFirst->setNombre('Tortilla');
    //     $platoFirst->setDescripcion('The best!');

    //     // relates this plato to the restaurante
    //     $platoFirst->setrestaurante($restaurante);

    //     $entityManager = $this->getDoctrine()->getManager();
    //     $entityManager->persist($platoFirst);
    //     $entityManager->flush();

    //     return new Response(
    //         $platoFirst->getNombre()
    //     );
    // }
    
}





