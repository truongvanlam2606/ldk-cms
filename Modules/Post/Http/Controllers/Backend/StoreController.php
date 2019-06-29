<?php

namespace Modules\Post\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Post\Entities\Post;
use Modules\Post\Contracts\IPostRepository;
use Modules\Post\Http\Requests\InsertPostRequest;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    protected $postRepository;
    
    public function __construct(IPostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function __invoke(InsertPostRequest $request)
    {
        $data = $request->all();
        $this->postRepository->insert($data);
        
        return redirect()->route('dashboard.post::index');
    }
}
