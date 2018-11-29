<?php

namespace App\Http\Controllers\Products\Category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\User;
use App\Models\Company;
use App\Models\Collection;
use Illuminate\Support\Facades\DB;
use Auth;

class categoryController extends Controller
{
    public function get(Request $request,$idCompany){
    	$user = $request->user();
    	if ($user->companyes()->find($idCompany)) {
    		$collections =  Collection::where('company_id', $idCompany)->where('status', 1)->get();
            if (!empty($collections)) {
                foreach ($collections as $key => $value) {
                    $collectionsId[] = $collections[$key]['id'];
                }
                $categoryActive = Category::whereIn('colletion_id',$collectionsId)->where('status', 1)->get();
                $categoryActive = $this->addNameCollection($categoryActive);
                $categoryDesactive = Category::whereIn('colletion_id',$collectionsId)->where('status', 0)->get();
                $categoryDesactive = $this->addNameCollection($categoryDesactive);
                return [
                        'status'=> true,
                        'category'=>[
                            'active' =>$categoryActive,
                            'desactive' => $categoryDesactive
                        ],
                        'collections' => $collections
                    ];
            }else{
                return [
                    'status'=> true,
                    'category'=>[
                        'active' =>'',
                        'desactive' => ''
                    ],
                    'collections' => $collections
                ];
            }
    		
    	}else{
    		return [
    			'status' => 'false',
    			'massage' => 'You are not part of this company'
    		];
    	}
    }

    public function addNameCollection($category){
    	foreach ($category as $key => $value) {
    		$category[$key]['collection'] = Collection::where('id',$category[$key]['colletion_id'])->first()['name'];
    	}
    	return $category;
    }

    public function add(Request $request){
    	$data = $request->all();
    	$user = $request->user();
    	if ($collection = Collection::find($data['idCollection'])->first()) {
    		$insert = [
	    		'colletion_id' => $data['idCollection'],
	    		'name' => $data['name'],
	    		'status' => 1
	    	];
	    	if (Category::create($insert)) {
	    		return $this->get($request, $collection['company_id']);
	    	}else{
	    		return [
	    			'status' => false,
	    			'massage' => 'You are not part of this company'
	    		];
	    	}

    	}else{
    		return [
    			'status' => false,
    			'massage' => 'You are not part of this company'
    		];
    	}
    	    	return $data;

    }

    public function update(Request $request, $idCollection, $idMaterialType){
    	$data = $request->all();
    	$user = $request->user();
    	
    }
    public function desactive(Request $request, $colletion_id){
        $data = $request->all();
        $user = $request->user();
        if ($category = Category::find($data['idCategory'])) {
        	$category->status = 0;
        	$category->save();
        	return $this->get($request, $data['idCompany']);
        }else{
        	return [
    			'status' => false,
    			'massage' => 'You are not part of this company'
    		];
        }
    }
    public function activate(Request $request, $colletion_id){
        $data = $request->all();
        $user = $request->user();
        if ($category = Category::find($data['idCategory'])) {
        	$category->status = 1;
        	$category->save();
        	return $this->get($request, $data['idCompany']);
        }else{
        	return [
    			'status' => false,
    			'massage' => 'You are not part of this company'
    		];
        }
    }
}
