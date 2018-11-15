<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/*
Authorization
 */
Route::prefix('auth')->middleware('cors')->group(function(){
	Route::post('login', 'Users\AuthController@login');
	Route::post('register', 'Users\AuthController@register');
});
/*
Oraganization
 */
Route::prefix('organization')->middleware(['cors','auth:api'])->group(function(){
	Route::get('getforuser', 'Organization\OrganizationController@getorganazitionsforuser');
	Route::post('add', 'Organization\OrganizationController@addorganization');
});

Route::prefix('company')->middleware(['cors','auth:api'])->group(function(){
	Route::get('getforuser', 'Company\CompanyController@getcompanyesforuser');
	Route::post('add', 'Company\CompanyController@addcompany');
});


Route::prefix('material_type')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'MaterialType\material_typeController@get');
	Route::post('add', 'MaterialType\material_typeController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'MaterialType\material_typeController@update');
	Route::post('desactive/{idCompany}', 'MaterialType\material_typeController@desactive');
	Route::post('activate/{idCompany}', 'MaterialType\material_typeController@activate');

});

Route::prefix('profile_product')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'ProfileProduct\profile_productController@get');
	Route::post('add', 'ProfileProduct\profile_productController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'ProfileProduct\profile_productController@update');
	Route::post('desactive/{idCompany}', 'ProfileProduct\profile_productController@desactive');
	Route::post('activate/{idCompany}', 'ProfileProduct\profile_productController@activate');
});

Route::prefix('volume_type')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'VolumeType\volume_typeController@get');
	Route::post('add', 'VolumeType\volume_typeController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'VolumeType\volume_typeController@update');
	Route::post('desactive/{idCompany}', 'VolumeType\volume_typeController@desactive');
	Route::post('activate/{idCompany}', 'VolumeType\volume_typeController@activate');
});
Route::prefix('moisture_product')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'MoistureProduct\moistureProductController@get');
	Route::post('add', 'MoistureProduct\moistureProductController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'MoistureProduct\moistureProductController@update');
	Route::post('desactive/{idCompany}', 'MoistureProduct\moistureProductController@desactive');
	Route::post('activate/{idCompany}', 'MoistureProduct\moistureProductController@activate');
});

Route::prefix('hazard_product')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'HazardProduct\hazard_productController@get');
	Route::post('add', 'HazardProduct\hazard_productController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'HazardProduct\hazard_productController@update');
	Route::post('desactive/{idCompany}', 'HazardProduct\hazard_productController@desactive');
	Route::post('activate/{idCompany}', 'HazardProduct\hazard_productController@activate');
});

Route::prefix('grade_product')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'GradeProduct\grade_productController@get');
	Route::post('add', 'GradeProduct\grade_productController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'GradeProduct\grade_productController@update');
	Route::post('desactive/{idCompany}', 'GradeProduct\grade_productController@desactive');
	Route::post('activate/{idCompany}', 'GradeProduct\grade_productController@activate');
});

Route::prefix('finish_product')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'FinishProduct\finish_productController@get');
	Route::post('add', 'FinishProduct\finish_productController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'FinishProduct\finish_productController@update');
	Route::post('desactive/{idCompany}', 'FinishProduct\finish_productController@desactive');
	Route::post('activate/{idCompany}', 'FinishProduct\finish_productController@activate');
});

Route::prefix('products/collection')->middleware(['cors','auth:api'])->group(function(){
	Route::get('get/{idCompany}', 'Products\Collection\collectionController@get');
	Route::post('add', 'Products\Collection\collectionController@add');
	Route::post('update/{idCompany}/{idMaterialType}', 'Products\Collection\collectionController@update');
	Route::post('desactive/{idCompany}', 'Products\Collection\collectionController@desactive');
	Route::post('activate/{idCompany}', 'Products\Collection\collectionController@activate');
});