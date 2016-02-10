<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'	=>	'admin'], function(){	//grupo del administrador catalogo.com/admin/...

	Route::resource('users', 'UsersController');		//Uso los CRUD del UsersController
	
	Route::get('users/{id}/destroy', [
			'uses'	=>	'UsersController@destroy',
			'as'	=>	'admin.users.destroy'
		]);

});

//Route::group(['prefix'	=>	'category'], function(){	//grupo del administrador catalogo.com/category/...

//	Route::resource('category', 'CategoriesController');		//Uso los CRUD del CategoryController

//});
