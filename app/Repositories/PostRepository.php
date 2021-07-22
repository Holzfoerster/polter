<?php

namespace App\Repositories;

use App\Models\Post;

/**
 * Class PostRepository
 * @package App\Repositories
 *
 * @method Post|null find($id)
 * @method Post findOrFail($id)
 */
class PostRepository extends BaseRepository
{

    public function query()
    {
        return Post::query();
    }

}

