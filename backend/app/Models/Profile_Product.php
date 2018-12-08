<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile_Product extends Model
{
    protected $table = 'profile_product';
    protected $fillable = [
        'collection_id', 'name', 'status',
    ];

    public function collection()
    {
        return $this->hasMany('App\Models\Collection', 'collection_id');
    }
}
