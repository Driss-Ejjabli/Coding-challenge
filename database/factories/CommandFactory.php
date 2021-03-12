<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Command;
use Faker\Generator as Faker;

$factory->define(Command::class, function (Faker $faker) {
    return [
        'date_command'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'status'=>$faker->numberBetween($min = -1, $max = 0),
        'client'=>$faker->name,
    ];
});
