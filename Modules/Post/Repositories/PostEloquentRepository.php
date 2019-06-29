<?php

namespace Modules\Post\Repositories;

use Modules\Post\Contracts\IPostRepository;
use App\Repositories\EloquentRepository;
use Modules\Post\Entities\Post;

class PostEloquentRepository extends EloquentRepository implements IPostRepository
{
    public function __construct()
    {
        $this->setModel();
    }
    
    public function getModel()
    {
        return Post::class;
    }
    public function getRelativePosts()
    {
    }
}
