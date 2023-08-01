<?php

// src/Controller/SecurityController.php
namespace Hschottm\SurveyBundle\Controller;

/*use Symfony\Component\Security\Core\Authentication\AuthenticationManagerInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\User\UserInterface;

class Authentication
{
    public function __construct(
        private AuthenticationManagerInterface $authenticationManager,
        private TokenStorageInterface $tokenStorage,
    )
    {
    }

    public static function myuserlogin(UserInterface $user): void
    {
        $token = new UsernamePasswordToken($user, null, 'firewallName', $user->getRoles());
        $authenticatedToken = $this->authenticationManager->authenticate($token);
        $this->tokenStorage->setToken($authenticatedToken);
    }
}*/


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\User;
use App\Security\LoginFormAuthenticator;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;

class SecurityController extends AbstractController
{
    public static function myuserlogin(
        Request $request, 
        LoginFormAuthenticator $loginAuthenticator,
        GuardAuthenticatorHandler $guard
    ): Response
    {
        // Find Some User in your application, in this example the one with ID #1
        $user = $this->getDoctrine()->getManager()->getRepository(User::class)->find(3);
        
        // Authenticate user 
        $guard->authenticateUserAndHandleSuccess(
            $user,
            $request,
            $loginAuthenticator,
            'main'
        );
        
        // At this point the user is now authenticated!
        
        // you may redirect the user to another page
        // execute other logic or whatever you need ;)
        return $this->redirectToRoute("articles_index");
    }
}