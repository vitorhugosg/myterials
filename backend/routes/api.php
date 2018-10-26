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