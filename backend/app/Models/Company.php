<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Company extends Model
{
    
	protected $fillable = [
        'name',
        'trade_name',
		'zip_code',
		'address1',
		'address2',
		'city',
		'state',
		'country',
		'status',
		'organization_id'
    ];
    public function users(){
    	return $this->belongsToMany(User::class, 'user_company');
    }
    public function organization()
    {
        return $this->hasMany('App\Models\Organization');
    }

    public function material_type()
    {
        return $this->belongsTo('App\Models\Material_Type');
    }
}