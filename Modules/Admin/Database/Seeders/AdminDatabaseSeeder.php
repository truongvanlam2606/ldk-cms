<?php

namespace Modules\Admin\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\Admin;
use Modules\Admin\Entities\AdminEntity;

class AdminDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        
        entity(AdminEntity::class)->create();
        
        // Admin::create(['name' => 'Admin', 'email' => 'admin@gmail.com', 'password' => bcrypt('secret'), 'status' => 1]);
        // $this->call("OthersTableSeeder");
    }
}
