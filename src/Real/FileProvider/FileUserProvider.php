<?php

namespace KNPLabs\Real\FileProvider;

use KNPLabs\Real\Provider\UserProvider;
use KNPLabs\Real\User;

class FileUserProvider implements UserProvider
{
    /**
     * @var array<User>
     */
    private array $users;

    public function __construct(string $filePath)
    {
        $jsonUsers = file_get_contents($filePath);
        $jsonDecodedUsers = json_decode($jsonUsers, true);
        foreach ($jsonDecodedUsers as $user) {
                try {
                        $this->users[] = new User($user['firstName'],$user['lastName'],$user['email'],$user['password']);
                }catch (\InvalidArgumentException $e){
                    throw new \Exception("Error Processing Users json file", 1);
                }
        }
    }

    /**
     * {@inheritDoc}
     */
    public function all(): array
    {
        return $this->users;
    }

    /**
     * {@inheritDoc}
     */
    public function findByEmail(string $email): ?User
    {
        $users = $this->all();
        foreach($users as $user){
            if ($email === $user->getEmail()) {
                return $user;
            }
        }
        return null;
    }
}
