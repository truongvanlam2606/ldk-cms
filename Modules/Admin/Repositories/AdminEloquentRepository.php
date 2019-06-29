<?php

namespace Modules\Admin\Repositories;

use Modules\Admin\Contracts\IAdminDbRepository;
use App\Repositories\EloquentRepository;
use Modules\Admin\Entities\Admin;

class AdminEloquentRepository extends EloquentRepository implements IAdminDbRepository
{
    public function __construct()
    {
        $this->setModel();
    }
    
    public function getModel()
    {
        return Admin::class;
    }
}
