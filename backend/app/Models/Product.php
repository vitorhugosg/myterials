<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'company_id',
        'collection_id',
        'bought_uofm_id',
        'sold_uofm_id',
        'width',
        'length',
        'heigth',
        'volume',
        'own_sku',
        'status',
        'type_product_id',
        'profile_id',
        'grade_id',
        'moisture_id',
        'material_type_id',
        'hazard_id',
        'volume_type_id',
        'finish_id',
        'supplier_sku',
        'hs_code',
        'upc_code',
        'barcode',
        'qrcode',
        'uofm_width',
        'uofm_height',
        'uofm_lenght',
        'uofm_volume',
        'net_weight',
        'gross_weight'
    ];
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
