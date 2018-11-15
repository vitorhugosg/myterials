<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';
    protected $fillable = [
        'company_id', 'name', 'status',
    ];

    public function collections()
    {
        return $this->belongsTo('App\Models\Collection', 'colletion_id');
    }
}
