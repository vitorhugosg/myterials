<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    protected $table = 'collection';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];
    public function companyes()
    {
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
