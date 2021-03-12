<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>$faker->name,
        'description'=>$faker->text,
        'price'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 500),
        'image'=>$faker->imageUrl($width = 640, $height = 480),
    ];
});
