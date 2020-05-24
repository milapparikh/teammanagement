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

Route::post('register', 'API\RegisterController@register');
Route::post('login', 'API\RegisterController@login');


Route::group(['middleware' => ['auth:api']], function(){	//Only for loggedin uses

	Route::group(['middleware' => ['teamauth']], function(){	//Only for team owner users
		Route::post('createteam', 'API\TeamController@store');
	});

});

/*
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
*/
