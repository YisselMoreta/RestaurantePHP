<?php
namespace AppBundle\Controller;

use AppBundle\Form\UserType;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class RegistroController extends Controller
{
        /**
     * @Route("/registro", name="registro")
     */
     public function registroAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
     {
         // 1) build the form
         $user = new User();
         $form = $this->createForm(UserType::class, $user);
 
         // 2) handle the submit (will only happen on POST)
         $form->handleRequest($request);
         dump($form->getErrors());
         if ($form->isSubmitted() && $form->isValid()) {

 
             // 3) Encode the password (you could also do this via Doctrine listener)
             $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
             $user->setPassword($password);
 
             dump($user);
             // 4) save the User!
             $entityManager = $this->getDoctrine()->getManager();
             $entityManager->persist($user);
             $entityManager->flush();
 
             // ... do any other work - like sending them an email, etc
             // maybe set a "flash" success message for the user
 
           
             return $this->redirectToRoute('homepage');
         }
 
         return $this->render(
             'registro/registro.html.twig',
             array('form' => $form->createView())
         );
     }
     
}