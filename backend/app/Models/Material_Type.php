<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material_Type extends Model
{
    protected $table = 'material_type';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];
    public function company()
    {
        return $this->hasMany('App\Models\Company', 'company_id');
    }
}
