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

Route::get('/', 'App\Http\Controllers\BasicCurdController@onSelect');



Route::get('/insert', function(){
    return view('insert');
});
Route::Post('/insertData', 'App\Http\Controllers\BasicCurdController@onInsert');



Route::get('/delete', function(){
    return view('delete');
});
Route::post('/deleteData', 'App\Http\Controllers\BasicCurdController@onDelete');

 
Route::get('/update', function(){
    return view('update');
});
Route::post('/updateData', 'App\Http\Controllers\BasicCurdController@onUpdate');