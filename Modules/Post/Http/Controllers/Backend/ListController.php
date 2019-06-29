<?php

namespace Modules\Post\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Post;

class ListController extends Controller
{
    public $posts;
    public function __construct(Post $post)
    {
        $this->posts = $post;
    }
    
    public function __invoke()
    {
        $posts = $this->posts->all();
        $data = compact('posts');
        
        return theme()->of('post::backend.index', $data)->render();
    }
}
