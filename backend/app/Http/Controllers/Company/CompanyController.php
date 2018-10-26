<?php

namespace App\Http\Controllers\Company;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Models\Company;
use App\User;
use Illuminate\Support\Facades\Validator;

class CompanyController extends Controller
{
	public function getcompanyesforuser(Request $request){
		$user = $request->user();
    	$companyes = $user->companyes()->get();
    	return [
    		'status' => true,
    		'companyes' => $companyes
    	];
	}
    public function addcompany(Request $request){
    	$data = $request->all();
    	$user = $request->user();
    	$validacao = Validator::make($data, [
	            'name' => 'required|string|max:191',
	            'tradeName' => 'required|string|max:191',
	            'zipCode' => 'required|string|max:21',
	            'Adress' => 'required|string|max:191',
	            'adressTwo' => 'required|string|max:191',
	            'city' => 'required|string|max:50',
	            'state' => 'required|string|max:50',
	            'country' => 'required|string|max:191',
	            'organization' => 'required|int|max:4'
	        ]);
	    //verificando se tem erros
	    if ($validacao->fails()) {
	    	return [
	    		'status' => false,
	    		'validacao' => true,
	    		'erros' => $validacao->errors()
	    	];
	    }
    	$organization = $user->companyes()->find($data['organization']);
    	$company = $user->companyes()->create([
    		'name' => $data['name'],
    		'trade_name' => $data['tradeName'],
    		'zip_code' => $data['zipCode'],
    		'address1' => $data['Adress'],
    		'address2' => $data['adressTwo'],
    		'city' => $data['city'],
    		'state' => $data['state'],
    		'country' => $data['tradeName'],
    		'status' => 1,
    		'organization_id' => $data['organization']
    	]);
    	
    	//verificando se tem erros
	    return [
	    		'status' => true,
	    		'companyes' => $user->companyes()->get()
	    	];
    }
}
