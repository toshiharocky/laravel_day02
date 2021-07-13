<?php
/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model;
use Faker\Generator as Faker;
use App\User; //追記
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'post_title'   => $faker->realText(10),
        'post_desc' => $faker->realText(10),
        'user_id' => function() {
            return User::all()->random();
        }
    ];
});