<?php

namespace Modules\Author\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class ListController extends Controller
{
    public function __invoke()
    {
        return theme()->of('author::backend.index')->render();
    }
}
