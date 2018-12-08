<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volume_Type extends Model
{
    protected $table = 'volume_type';
    protected $fillable = [
        'collection_id', 'name', 'status',
    ];
    public function collection()
    {
        return $this->hasMany('App\Models\Company', 'collection_id');
    }
}
