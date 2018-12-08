<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Harzard_Product extends Model
{
    protected $table = 'hazard_product';
    protected $fillable = [
        'collection_id', 'name', 'status',
    ];
    public function collection()
    {
        return $this->hasMany('App\Models\Collection', 'collection_id');
    }
}
