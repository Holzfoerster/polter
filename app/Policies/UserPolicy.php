<?php

namespace App\Policies;

use App\Models\User;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any item.
     *
     * @param  User $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can view the item.
     *
     * @param User $user
     * @param User $item
     * @return mixed
     */
    public function view(User $user, User $item)
    {
        return true;
    }

    /**
     * Determine whether the user can create item.
     *
     * @param User $user
     * @return mixed
     */
    public function create(User $user)
    {
        return true;
    }

    /**
     * Determine whether the user can update the item.
     *
     * @param User $user
     * @param User $item
     * @return mixed
     */
    public function update(User $user, User $item)
    {
        return $user->id === $item->user_id;
    }

    /**
     * Determine whether the user can delete the item.
     *
     * @param User $user
     * @param User $item
     * @return mixed
     */
    public function delete(User $user, User $item)
    {
        return $user->id === $item->user_id;
    }

    /**
     * Determine whether the user can restore the item.
     *
     * @param User $user
     * @param User $item
     * @return mixed
     */
    public function restore(User $user, User $item)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the item.
     *
     * @param User $user
     * @param User $item
     * @return mixed
     */
    public function forceDelete(User $user, User $item)
    {
        //
    }
}

