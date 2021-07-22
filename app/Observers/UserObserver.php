<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the item "created" event.
     *
     * @param  User $item
     * @return void
     */
    public function created(User $item)
    {
        //
    }

    /**
     * Handle the item "updated" event.
     *
     * @param  User $item
     * @return void
     */
    public function updated(User $item)
    {
        //
    }

    /**
     * Handle the item "deleted" event.
     *
     * @param  User $item
     * @return void
     */
    public function deleted(User $item)
    {
        //
    }

    /**
     * Handle the item "restored" event.
     *
     * @param  User $item
     * @return void
     */
    public function restored(User $item)
    {
        //
    }

    /**
     * Handle the item "force deleted" event.
     *
     * @param  User $item
     * @return void
     */
    public function forceDeleted(User $item)
    {
        //
    }
}

