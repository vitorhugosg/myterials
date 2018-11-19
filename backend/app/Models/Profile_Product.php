<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile_Product extends Model
{
    protected $table = 'profile_product';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];

    public function companyes()
    {
        return $this->hasMany('App\Models\Company', 'company_id');
    }
}