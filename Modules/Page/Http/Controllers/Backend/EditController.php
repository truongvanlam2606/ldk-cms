<?php

namespace Modules\Page\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class EditController extends Controller
{
    public function __invoke()
    {
        return theme()->of('page::backend.edit')->render();
    }
}
