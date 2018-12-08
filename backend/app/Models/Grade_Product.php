<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Grade_Product extends Model
{
    protected $table = 'grade_product';

    protected $fillable = [
        'collection_id', 'name', 'status',
    ];

    public function collection()
    {
        return $this->hasMany('App\Models\Collection', 'collection_id');
    }
}
