<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product_Category extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
