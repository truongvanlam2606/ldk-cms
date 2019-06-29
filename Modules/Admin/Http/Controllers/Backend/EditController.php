<?php

namespace Modules\Admin\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Contracts\IAdminDbRepository;

class EditController extends Controller
{
    protected $adminRepository;
    
    public function __construct(IAdminDbRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }
    public function __invoke($id)
    {
        $admin = $this->adminRepository->find($id);
        $dataView = compact('admin');
        return theme()->of('admin::backend.edit', $dataView)->render();
    }
}
