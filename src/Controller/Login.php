<?php

namespace KNPLabs\Controller;

use KNPLabs\Real\Provider\UserProvider;
use KNPLabs\Routing\Controller;
use KNPLabs\Security\AuthenticatedUserProvider;

class Login implements Controller
{
    private UserProvider $userProvider;
    private AuthenticatedUserProvider $authenticatedUserProvider;

    public function __construct(UserProvider $userProvider, AuthenticatedUserProvider $authenticatedUserProvider)
    {
        $this->userProvider = $userProvider;
        $this->authenticatedUserProvider = $authenticatedUserProvider;
    }

    public function handleRequest(): void
    {
        $authenticatedUser = $this->authenticatedUserProvider->getAuthenticatedUser();
        if (!empty($_POST)) {
            $email = isset($_POST['email']) ? $_POST['email'] : null;
            $password = isset($_POST['password']) ? $_POST['password'] : null;
            if ($email === null) {
                ViewRenderer::render('displayLogin.php');
            }
            $user = $this->userProvider->findByEmail($email);
            if ($user === null) {
                throw new \Exception("No user found", 1);
            }
            if ($user->getPassword() !== $password) {
                throw new \Exception("Wrong pw", 1);
            }
            session_start();

            $_SESSION[AuthenticatedUserProvider::AUTHENTICATED_USER_KEY] = $user->getEmail();

            header('Location: http://localhost');

            return;
        }

        ViewRenderer::render('displayLogin.php', ['authenticatedUser' => $authenticatedUser]);
    }
}
