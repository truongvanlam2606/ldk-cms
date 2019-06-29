<?php

namespace Modules\Post\Contracts;

use App\Contracts\IDbRepository;

interface IPostRepository extends IDbRepository
{
    public function getRelativePosts();
}
