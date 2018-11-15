<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group_Product extends Model
{
    protected $table = 'group_product';

    public function products()
    {
        return $this->hasMany('App\Models\Products','product_id');
    }

    public function group_product()
    {
        return $this->belongsTo('App\Models\Group_Product','group_product_id');
    }
}
