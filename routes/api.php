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

Route::prefix('/users')->group(function() 
{
    Route::get('/', 'UserController@index');
    Route::post('/save', 'UserController@save'); 
    Route::get('/list', 'UserController@list'); 
    Route::put('/{users}/update', 'UserController@update');
    Route::delete('/{users}/destroy', 'UserController@destroy');  
});

Route::prefix('/posts')->group(function() 
{
    Route::get('/', 'PostsController@index');
    Route::post('/save', 'PostsController@save'); 
    Route::get('/list', 'PostsController@list'); 
    Route::put('/{posts}/update', 'PostsController@update');
    Route::delete('/{posts}/destroy', 'PostsController@destroy');  
});