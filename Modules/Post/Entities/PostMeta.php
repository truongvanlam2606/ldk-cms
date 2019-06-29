<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Post\Entities\Post;

class PostMeta extends Model
{
    protected $fillable = [];

    public function post()
    {
        return $this->hasOne(Post::class);
    }
}
