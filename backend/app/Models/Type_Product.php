<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type_Product extends Model
{
    protected $table = 'type_product';

    public function companyes()
    {
        return $this->hasMany('App\Models\Company', 'company_id');
    }
}
