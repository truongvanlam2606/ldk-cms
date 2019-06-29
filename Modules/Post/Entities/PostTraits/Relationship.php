<?php

namespace Modules\Post\Entities\PostTraits;

use Modules\Post\Entities\PostMeta;

trait Relationship
{
    public function postMeta()
    {
        return $this->hasOne(PostMeta::class);
    }
}
