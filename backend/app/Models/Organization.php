<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $fillable = [
        'name'
    ];

    public function users(){
    	return $this->belongsToMany(User::class, 'user_organization');
    }
    public function companyes()
    {
        return $this->hasMany('App\Model\Company');
    }
}
