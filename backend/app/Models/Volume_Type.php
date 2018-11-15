<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volume_Type extends Model
{
    protected $table = 'volume_type';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];
    public function companyes()
    {
        return $this->hasMany('App\Models\Company', 'company_id');
    }
}
