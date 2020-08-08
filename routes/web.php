<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'as'=>'Display',
    'uses'=>'controllerProduct@index'
]);
Route::get('Add_show',[
    'as'=>'Add_show',
    'uses'=>'controllerProduct@show'
]);
Route::post('Search',[
    'as'=>'Search',
    'uses'=>'controllerProduct@store',
]);
Route::post('Add',[
    'as'=>'Add',
    'uses'=>'controllerProduct@create',
]);
Route::get('Edit/{id}', [
    'as'=>'Edit',
    'uses'=>'controllerProduct@edit'
]);
Route::post('Update/{id}',[
    'as'=>'Update',
    'uses'=>'controllerProduct@update'
]);

Route::delete('Delete/{id}', [
    'as'=>'Delete',
    'uses'=>'controllerProduct@destroy'
]);
