<?php

namespace Modules\Admin\Entities\AdminTraits;

trait Mutator{
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}