<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Restaurante;
use AppBundle\Entity\Platos;

use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;



class GuardadoController extends Controller
{
    /**
    * @Route("restaurante/guardado", name="restauranteGuardado");
    */
    public function restauranteGuardadoAction(Request $request)
    {
        return new Response('<html><body>OK! Guardado!</body></html>');
    }
}