<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route('/login', name: 'login')]
    public function index(AuthenticationUtils $authenticationUtils): Response
        {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        return $this->render('login/index.html.twig', [
        'controller_name' => 'LoginController',
        'last_username' => $lastUsername,
        'error' => $error
        ]);
        }
        #[Route('/logout', name: 'app_logout')]
    public function logout():void
        {
        throw new \Exception('This method can be blank - it will be intercepted by the logout key on your firewall');
        }    
}
