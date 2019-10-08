<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Producto;




class ApiController extends AbstractController
{

    private $productos= [
        1=> "Pimiento",
        2=> "Arroz",
        3=> "Manzana",
        4=> "Zanahoria",
        5=> "Apio"
    ];
    
    /**
     * @Route("/api/almacenes", name="listaAlmacenes", methods={"GET"}))
     */
    public function listaAlmacenesAction(Request $request)
    {
        
        $response =new JsonResponse($productos); 
        $response->headers->set('Access-Control-Allow-Origin', '*');
        return $response;
        
            
       
    }
     /**
     * @Route("/productos", name="listarProductos", methods={"GET"}))
     */
    public function listarProductos(Request $request)
    {
        $repository = $this->getDoctrine()->getRepository(Producto::class);
        $productos=$repository -> findAll();
        foreach ($productos as $producto) {
            $productosArray[]=[
                "id"=>$producto.getId(),
                "nombre"=>$producto.getNombre(),
                "descripcion"=>$producto.getDescripcion()
            ];
        }
        return  new JsonResponse($productos);   
       
    }
    
    
}





