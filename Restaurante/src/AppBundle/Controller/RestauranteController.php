<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Restaurante;
use AppBundle\Entity\Platos;
use AppBundle\Form\RestauranteType;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class RestauranteController extends Controller
{
    /**
    * @Route("restaurante/nuevo", name="restauranteNuevo");
    */
    public function restauranteNuevoAction(Request $request)
    {
        $restaurante = new Restaurante();
        // $restaurante->setNombre('Restaurante Asturias');
        // $restaurante->setLocalidad('Asturias');
        $form = $this->createForm(RestauranteType::class, $restaurante);
        $form->handleRequest($request);

     

            
        
        if ($form->isSubmitted() && $form->isValid()) { //VALIDACION!!
            // $form->getData() holds the submitted values
            // but, the original `$task` variable has also been updated
            $restaurante = $form->getData();
            // ... perform some action, such as saving the task to the database
            // for example, if Task is a Doctrine entity, save it!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($restaurante);
            $entityManager->flush();
            return $this->redirectToRoute('restauranteGuardado');
               

        }
           

        return $this->render('default/restaurante-nuevo.html.twig', [
        'form' => $form->createView(),]);
    }

     
}