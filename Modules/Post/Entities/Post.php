<?php

namespace Modules\Post\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Post\Entities\PostTraits\Relationship;
use Modules\Post\Entities\PostTraits\Property;
use Modules\Post\Entities\PostTraits\Scope;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable, Property, Relationship, Scope;
    
    protected $fillable = ['title','description','content','slug','view','published_at','status','author_id'];
    
    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
