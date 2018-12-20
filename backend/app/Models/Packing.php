<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Packing extends Model
{
    protected $table = 'packing';
    protected $fillable = [
        'collection_id', 'name', 'status',
    ];

    public function collection()
    {
        return $this->hasMany('App\Models\Company', 'collection_id');
    }
}
