<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


    protected $table = 'products';

    //ONE TO MANY
	public function type_product(){
        return $this->belongsTo('App\Models\Type_Product', 'type_product_id');
    }

    public function company(){
        return $this->belongsTo('App\Models\Type_Product', 'company_id');
    }

    public function collection(){
        return $this->belongsTo('App\Models\Collection', 'collection_id');
    }

    public function Bouth_uofm(){
        return $this->belongsTo('App\Models\Uofm_type', 'bought_uofm_id');
    }

    public function Sold_uofm(){
        return $this->belongsTo('App\Models\Uofm_type', 'sold_uofm_id');
    }

    public function profile(){
    	return $this->belongsTo('App\Models\Profile_Product', 'profile_id');
    }

    public function grade(){
    	return $this->belongsTo('App\Models\Grade_Product', 'grade_id');
    }

    public function moisture(){
    	return $this->belongsTo('App\Models\Moisture_Product', 'moisture_id');
    }

    public function material_type(){
    	return $this->belongsTo('App\Models\Material_Type', 'material_type_id');
    }

    public function hazard(){
    	return $this->belongsTo('App\Models\Hazard_Product','hazard_id');
    }

    public function volume_type(){
    	return $this->belongsTo('App\Models\Volume_Type','volume_type_id');
    }

    public function finish(){
    	return $this->belongsTo('App\Models\Volume_Type','finish_id');
    }
    //END ONE TO MANY

    //MANY TO MANY
    public function categoryes(){
    	return $this->belongsToMany('App\Models\Category', 'category_product', 'product_id', 'category_id');
    }



}
