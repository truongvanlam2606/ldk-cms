<?php

use Faker\Generator as Faker;
use Modules\Post\Entities\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text,
        'content' => $faker->paragraph(10),
    ];
});
