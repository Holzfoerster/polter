<?php

namespace App\Policies;

use App\Models\Post;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
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
     * @param Post $item
     * @return mixed
     */
    public function view(User $user, Post $item)
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
     * @param Post $item
     * @return mixed
     */
    public function update(User $user, Post $item)
    {
        return $user->id === $item->user_id;
    }

    /**
     * Determine whether the user can delete the item.
     *
     * @param User $user
     * @param Post $item
     * @return mixed
     */
    public function delete(User $user, Post $item)
    {
        return $user->id === $item->user_id;
    }

    /**
     * Determine whether the user can restore the item.
     *
     * @param User $user
     * @param Post $item
     * @return mixed
     */
    public function restore(User $user, Post $item)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the item.
     *
     * @param User $user
     * @param Post $item
     * @return mixed
     */
    public function forceDelete(User $user, Post $item)
    {
        //
    }
}

