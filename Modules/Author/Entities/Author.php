<?php

namespace Modules\Author\Entities;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $fillable = ['name','address','numberphone','description'];
}
