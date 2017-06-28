<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'IndexController@index');
Route::get('/category/{cid}', 'IndexController@category');
Route::get('/article/{aid}', 'IndexController@article');

Route::get('/article/{aid}',['uses'=>'IndexController@article']);


