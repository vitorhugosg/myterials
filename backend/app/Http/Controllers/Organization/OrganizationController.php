<?php

namespace App\Http\Controllers\Organization;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\User;
use Auth;
use Illuminate\Support\Facades\Validator;

class OrganizationController extends Controller
{
    public function addorganization(Request $request){
    	$data = $request->all();
    	$user = $request->user();
    	$validacao = Validator::make($data, [
	            'name' => 'required|string|max:191'
	        ]);
	    //verificando se tem erros
	    if ($validacao->fails()) {
	    	return [
	    		'status' => false,
	    		'validacao' => true,
	    		'erros' => $validacao->errors()
	    	];
	    }else{
	    	$addorganization = $user->organizations()->create(
	    		['name' => $data['name']]
	    	);
	    	return [
	    		'status' => true,
	    		'organizations' => $user->organizations()->get()
	    	];
	    }

    }

    public function getorganazitionsforuser(Request $request){
    	$user = $request->user();
    	$organization = $user->organizations()->get();
    	return [
    		'status' => true,
    		'organization' => $organization
    	];
    }
}
