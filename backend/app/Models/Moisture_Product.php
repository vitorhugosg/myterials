<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Moisture_Product extends Model
{
    protected $table = 'moisture_product';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];

    public function companyes()
    {
        return $this->hasMany('App\Models\Company', 'company_id');
    }
}
