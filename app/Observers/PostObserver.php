<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    /**
     * Handle the item "created" event.
     *
     * @param  Post $item
     * @return void
     */
    public function created(Post $item)
    {
        //
    }

    /**
     * Handle the item "updated" event.
     *
     * @param  Post $item
     * @return void
     */
    public function updated(Post $item)
    {
        //
    }

    /**
     * Handle the item "deleted" event.
     *
     * @param  Post $item
     * @return void
     */
    public function deleted(Post $item)
    {
        //
    }

    /**
     * Handle the item "restored" event.
     *
     * @param  Post $item
     * @return void
     */
    public function restored(Post $item)
    {
        //
    }

    /**
     * Handle the item "force deleted" event.
     *
     * @param  Post $item
     * @return void
     */
    public function forceDeleted(Post $item)
    {
        //
    }
}

