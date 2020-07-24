<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/', '\App\Http\Controllers\AdminController@adminLoginPage');
Route::post('login', '\App\Http\Controllers\AdminController@adminLogin');
Route::get('staff', '\App\Http\Controllers\AdminController@staffIndexPage');

Route::get('admin/register', '\App\Http\Controllers\AdminController@adminRegisterPage');
Route::post('admin/register/new', '\App\Http\Controllers\AdminController@adminCreate' );

Route::get('staff/register', '\App\Http\Controllers\AdminController@staffRegisterPage');
Route::post('staff/register/new', '\App\Http\Controllers\AdminController@staffCreate' );

Route::get('staff/{id}', '\App\Http\Controllers\AdminController@staffShow');
Route::post('staff/{id}/delete', '\App\Http\Controllers\AdminController@staffDelete' );
Route::get('staff/{id}/edit', '\App\Http\Controllers\AdminController@staffEditPage');
Route::post('staff/{id}/edit', '\App\Http\Controllers\AdminController@staffUpdate' );

