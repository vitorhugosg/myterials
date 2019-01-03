<?php

use Illuminate\Http\Request;
// header("Cache-Control: no-cache, must-revalidate");
// header('Access-Control-Allow-Origin: *');
// header('Access-Control-Allow-Methods: POST, GET, OPTIONS, PUT, DELETE');
// header('Access-Control-Allow-Headers: Content-Type, X-Auth-Token, Origin, Authorization');
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


//Requisições

Route::middleware(['cors','auth:api'])->group(function(){
	/*
	Oraganization
	 */
	Route::prefix('company')->group(function(){
		Route::get('getforuser', 'Company\CompanyController@getcompanyesforuser');
		Route::post('add', 'Company\CompanyController@addcompany');
	});
	/*
	Company
	 */
	Route::prefix('organization')->group(function(){
		Route::get('getforuser', 'Organization\OrganizationController@getorganazitionsforuser');
		Route::post('add', 'Organization\OrganizationController@addorganization');
	});

	/*
	Products
	 */
	Route::prefix('products')->group(function(){
		
		Route::get('getproductsaux/{idCompany}', 'Products\Products@getProductsAux');
		Route::get('getuofm', 'Products\Uofm\UofmController@get');
		Route::post('add/{idCompany}', 'Products\Products@insertProduct');
		Route::prefix('material_type')->group(function(){
			Route::get('get/{idCompany}', 'Products\MaterialType\material_typeController@get');
			Route::post('add', 'Products\MaterialType\material_typeController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\MaterialType\material_typeController@update');
			Route::post('desactive/', 'Products\MaterialType\material_typeController@desactive');
			Route::post('activate/', 'Products\MaterialType\material_typeController@activate');

		});

		Route::prefix('profile_product')->group(function(){
			Route::get('get/{idCompany}', 'Products\ProfileProduct\profile_productController@get');
			Route::post('add', 'Products\ProfileProduct\profile_productController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\ProfileProduct\profile_productController@update');
			Route::post('desactive/', 'Products\ProfileProduct\profile_productController@desactive');
			Route::post('activate/', 'Products\ProfileProduct\profile_productController@activate');
		});

		Route::prefix('volume_type')->group(function(){
			Route::get('get/{idCompany}', 'Products\VolumeType\volume_typeController@get');
			Route::post('add', 'Products\VolumeType\volume_typeController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\VolumeType\volume_typeController@update');
			Route::post('desactive/', 'Products\VolumeType\volume_typeController@desactive');
			Route::post('activate/', 'Products\VolumeType\volume_typeController@activate');
		});
		Route::prefix('moisture_product')->group(function(){
			Route::get('get/{idCompany}', 'Products\MoistureProduct\moistureProductController@get');
			Route::post('add', 'Products\MoistureProduct\moistureProductController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\MoistureProduct\moistureProductController@update');
			Route::post('desactive/', 'Products\MoistureProduct\moistureProductController@desactive');
			Route::post('activate/', 'Products\MoistureProduct\moistureProductController@activate');
		});

		Route::prefix('hazard_product')->group(function(){
			Route::get('get/{idCompany}', 'Products\HazardProduct\hazard_productController@get');
			Route::post('add', 'Products\HazardProduct\hazard_productController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\HazardProduct\hazard_productController@update');
			Route::post('desactive/', 'Products\HazardProduct\hazard_productController@desactive');
			Route::post('activate/', 'Products\HazardProduct\hazard_productController@activate');
		});

		Route::prefix('grade_product')->group(function(){
			Route::get('get/{idCompany}', 'Products\GradeProduct\grade_productController@get');
			Route::post('add', 'Products\GradeProduct\grade_productController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\GradeProduct\grade_productController@update');
			Route::post('desactive/', 'Products\GradeProduct\grade_productController@desactive');
			Route::post('activate/', 'Products\GradeProduct\grade_productController@activate');
		});

		Route::prefix('finish_product')->group(function(){
			Route::get('get/{idCompany}', 'Products\FinishProduct\finish_productController@get');
			Route::post('add', 'Products\FinishProduct\finish_productController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\FinishProduct\finish_productController@update');
			Route::post('desactive/', 'Products\FinishProduct\finish_productController@desactive');
			Route::post('activate/', 'Products\FinishProduct\finish_productController@activate');
		});

		Route::prefix('collection')->group(function(){
			Route::get('get/{idCompany}', 'Products\Collection\collectionController@get');
			Route::get('getforid/{id}', 'Products\Collection\collectionController@getForid');
			Route::post('add', 'Products\Collection\collectionController@add');
			Route::post('update/{idCompany}/{idMaterialType}', 'Products\Collection\collectionController@update');
			Route::post('desactive/{idCompany}', 'Products\Collection\collectionController@desactive');
			Route::post('activate/{idCompany}', 'Products\Collection\collectionController@activate');
		});

		Route::prefix('category')->group(function(){
			Route::get('get/{idCompany}', 'Products\Category\categoryController@get');
			Route::post('add', 'Products\Category\categoryController@add');
			Route::post('desactive/{colletion_id}', 'Products\Category\categoryController@desactive');
			Route::post('activate/{colletion_id}', 'Products\Category\categoryController@activate');
		});
	});
	
});
