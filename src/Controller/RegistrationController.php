<?php
// src/AppBundle/Controller/RegistrationController.php 
namespace App\Controller; 

use App\Entity\SpipAuteurs; 
use App\Form\Type\SpipAuteursType; 

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request; 
use Symfony\Component\Routing\Annotation\Route; 
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; 

class RegistrationController extends AbstractController 
{
    /**
     * @Route("/register", name="user_registration")
     */
    public function registerAction(Request $request, UserPasswordEncoderInterface $passwordEncoder)
    {
        // 1) build the form
        $user = new SpipAuteurs();
        $form = $this->createForm(SpipAuteursType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPass());
            $user->setPassword($password);
            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            return $this->redirectToRoute('security_login');
        }
        return $this->render(
            'registration/register.html.twig',
            ['form' => $form->createView()]
        );
    }
}
