<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Images_Products extends Model
{
    protected $fillable = [
    	'products_id',
    	'path',
    	'status'
    ];
    protected $table = 'images_products';
}
