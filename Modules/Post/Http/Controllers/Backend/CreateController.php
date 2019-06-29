<?php

namespace Modules\Post\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Post;

class CreateController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    // protected $posts;
    // public function __construct(Post $post){
    //     $this->middleware('auth');
    //     $this->posts = $post;

    // }

    public function __invoke()
    {
        theme()->asset()->add('ckeditor', 'ckeditor/ckeditor.js');
        theme()->asset()->usePath()->add('datepicker', 'vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');
        

        return theme()->of('post::backend.create')->render();
    }
}
