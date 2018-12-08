<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material_Type extends Model
{
    protected $table = 'material_type';
    protected $fillable = [
        'collection_id', 'name', 'status'
    ];
    public function collection()
    {
        return $this->hasMany('App\Models\Company', 'collection_id');
    }
}
