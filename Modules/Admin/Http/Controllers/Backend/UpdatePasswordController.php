<?php

namespace Modules\Admin\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Modules\Admin\Contracts\IAdminDbRepository;
use Modules\Admin\Http\Requests\UpdateAdminRequest;

class UpdatePasswordController extends Controller
{
    protected $adminRepository;
    
    private $requestFields = [
      'password'
    ];
    
    public function __construct(IAdminDbRepository $adminRepository)
    {
        $this->adminRepository = $adminRepository;
    }

    public function __invoke($id, UpdatePasswordAdminRequest $request)
    {
        $adminData = $request->only($this->requestFields);
        $this->adminRepository->update($id, $adminData);
        
        return redirect()->route('dashboard.admin::index');
    }
}
