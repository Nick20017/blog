<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class LoginController extends AbstractController
{
    #[Route(path: '/login', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        $error = $authenticationUtils->getLastAuthenticationError();
        $error = str_contains($error, 'Invalid credentials.') ? 'Invalid login or password' : $error;

        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('login/login.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    #[Route(path: '/logout', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }

    #[Route(path: '/login-check', name: 'app_login_check')]
    public function loginCheck(): Response
    {
        $user = $this->getUser();
        if ($user) {
            $this->addFlash('success', 'Welcome back, ' . $user->getUsername());
            return $this->redirectToRoute('app_post');
        } else {
            return $this->redirectToRoute('app_login');
        }
    }
}
