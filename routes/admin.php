<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\DB;

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



Route::get('/', function () {
    return view('welcome');
});



route::get('/admin',function (){

    return "admin";
});


//Route::get('/postt','posts@index');

//Route::get('/post/{id}/{name}','posts@postss');
//Route::get('/category','posts@category');

//Route::get('/post',function(){return "post num";});
//Route::get('/post','posts1@index');
//  Route::get('/post/{id}','posts1@index');
//route::resource('pp','posts1');
    //route::get('/pp/{id}','posts1@post');
    route::get('/tt/{id1}/{name}','posts1@post1');
    Route::get('/title','posts1@post2');
//Route::get('/post/{id}','posts@index');
//Route::get('/post/{id1}',function($id1){return "post num".$id1;});
//Route::resource('ppp','posts');
//Route::get('post/{id2}','posts@postss');
