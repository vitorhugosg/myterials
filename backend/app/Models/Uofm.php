<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uofm extends Model
{
    protected $table = 'uofm';
    protected $fillable = [
        'id', 'uofm_type_id', 'name','base_factor', 'base_multiply'
    ];
}
