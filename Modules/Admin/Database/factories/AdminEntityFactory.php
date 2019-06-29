<?php

use Faker\Generator as Faker;
use Modules\Admin\Entities\AdminEntity;

$factory->define(AdminEntity::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt('secret'),
        'status' => 1
    ];
});
