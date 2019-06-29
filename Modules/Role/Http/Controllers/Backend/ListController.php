<?php

namespace Modules\Role\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Role\Entities\Role;
use Illuminate\Routing\Controller;

class ListController extends Controller
{
    public function __invoke()
    {
        $roles = Role::paginate(5);
        $data = compact('roles');
        return theme()->of('role::backend.list',$data)->render();
    }
}
