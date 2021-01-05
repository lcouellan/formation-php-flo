<?php

namespace KNPLabs\Real\FilePersister;

use KNPLabs\Real\User;
use KNPLabs\Real\Persister\UserPersister;
use KNPLabs\Real\Provider\UserProvider;


class FileUserPersister implements UserPersister
{
    private string $filePath;
    private UserProvider $userProvider;

    public function __construct(string $filePath, UserProvider $userProvider)
    {
        $this->filePath = $filePath;
        $this->userProvider = $userProvider;
       
    }

    public function save(User $user): void{
        $allUsers = $this->userProvider->all();
        $allUsers[] = $user;
        $rawUser = [];

        foreach ($allUsers as $dino ) {
            $rawUser[] = $dino->toArray();
        }

        $jsonDinos = json_encode($rawUser);
        file_put_contents($this->filePath, $jsonDinos);
        
    }


}
