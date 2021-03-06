<?php

namespace KNPLabs\Real\Provider;

use KNPLabs\Real\User;

interface UserProvider
{
    /**
     * @return array<User>
     */
    public function all(): array;

    /**
     * @return array<User>
     */
    public function findByEmail(string $email): ?User;
}
