<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moisture_Product extends Model
{
    protected $table = 'moisture_product';
    protected $fillable = [
        'collection_id', 'name', 'status',
    ];

    public function collection()
    {
        return $this->hasMany('App\Models\Company', 'collection_id');
    }
}
