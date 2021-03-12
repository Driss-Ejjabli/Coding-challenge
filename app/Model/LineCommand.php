<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LineCommand extends Model
{
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function command()
    {
        return $this->belongsTo(Command::class);
    }
}
