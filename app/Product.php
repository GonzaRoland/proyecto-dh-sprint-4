<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model

{

    protected $guarded = [];
    
    protected $fillable = [
        'prod_name', 
        'price', 
        'prod_description', 
        'stock',
        'photopath', 
        'genre_id', 
    ];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }
}
