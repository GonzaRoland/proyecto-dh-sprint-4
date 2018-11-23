<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
