<?php

namespace App\Repositories;

use App\Models\User;

/**
 * Class UserRepository
 * @package App\Repositories
 *
 * @method User|null find($id)
 * @method User findOrFail($id)
 */
class UserRepository extends BaseRepository
{

    public function query()
    {
        return User::query();
    }

}

