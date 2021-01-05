<?php
 
 namespace KNPLabs\Security;
  
 use KNPLabs\Real\Provider\UserProvider;
 use KNPLabs\Real\User;
  
 class AuthenticatedUserProvider
 {
     const AUTHENTICATED_USER_KEY = 'authenticatedUser';
  
     private UserProvider $userProvider;
  
     public function __construct(UserProvider $userProvider)
     {
         $this->userProvider = $userProvider;
     }
  
     public function getAuthenticatedUser(): ?User
     {
         session_start();
  
         if (!isset($_SESSION[self::AUTHENTICATED_USER_KEY])) {
             return null;
         }
  
         $userEmail = $_SESSION[self::AUTHENTICATED_USER_KEY];
         $user = $this->userProvider->findByEmail($userEmail);
  
         return $user;
     }
 }