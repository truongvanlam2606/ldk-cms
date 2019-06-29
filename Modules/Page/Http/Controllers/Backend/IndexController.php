<?php

namespace Modules\Page\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Page\Entities\Page;

class IndexController extends Controller
{
    public function __invoke()
    {
        $pages = Page::all();
        $viewData = compact('pages');
        return theme()->of('page::backend.index', $viewData)->render();
    }
}
