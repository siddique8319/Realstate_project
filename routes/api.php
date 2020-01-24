<?php

// api.php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/post/create', 'PostController@store');
Route::post('/index/project-name-create', 'PostController@storeName');
Route::get('/post/edit/{id}', 'PostController@edit');
Route::post('/post/update/{id}', 'PostController@update');
Route::delete('/post/delete/{id}', 'PostController@delete');
Route::get('/posts', 'PostController@index');
Route::get('/projectNames', 'PostController@viewProjectName');
Route::delete('/index/deleteName/{id}', 'PostController@deleteNames');
Route::post('/index/project-house-create', 'PostController@storeHouse');
