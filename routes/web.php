<?php

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
use \Illuminate\Routing\Router;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test','TestController@testSearch');
//Auth::routes();


Route::get('create','HomeController@create');

//Route::group(['middleware'=>['web']],function (Router $router){
//    $router->resource('test','TestController');
//    $router->resource('user','UserController');
//    $router->get('/home','HomeController@index')->name('home');
//});



//Route::get('/home', 'HomeController@index')->name('home');
