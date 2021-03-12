<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Command;
use App\Model\LineCommand;
use App\Model\Product;
use Faker\Generator as Faker;

$factory->define(LineCommand::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
            return Product::all()->random();
        },
        'quantite'=>$faker->numberBetween($min = 1000, $max = 9000),
        'total'=>$faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 5000),
        'command_id'=>function(){
            return Command::all()->random();
        },
    ];
});
