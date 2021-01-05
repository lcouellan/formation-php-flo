<?php

namespace KNPLabs\Real\Persister;

use KNPLabs\Real\User;

interface UserPersister
{
    /**
     * @return void
     */
    public function save(User $user): void;
}
