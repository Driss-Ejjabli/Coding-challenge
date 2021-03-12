<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Product;
use App\Model\Product_Category;
use Faker\Generator as Faker;

$factory->define(Product_Category::class, function (Faker $faker) {
    return [
        'product_id'=>function(){
            return Product::all()->random();
        },
        'category_id'=>function(){
            return Category::all()->random();
        },
    ];
});
