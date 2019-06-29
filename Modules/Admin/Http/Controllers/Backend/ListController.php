<?php

namespace Modules\Admin\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Admin;

class ListController extends Controller
{
    public $admins;
    public function __construct(Admin $admin)
    {
        $this->admins = $admin;
    }
    
    public function __invoke()
    {
        $admins = $this->admins->all();
        $data = compact('admins');
        return theme()->of('admin::backend.index', $data)->render();
    }
}
