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

Route::group(['middleware' => ['web']], function () {


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/', function () {//index
        return view('welcome');
    });
    Route::get('/ipad', function () {//ipad
        return view('ipad');
    });
    Route::get('/iphone', function () {//iphone
        return view('iphone');
    });
    Route::get('/mac', function () {//mac
        return view('mac');
    });
    Route::get('/watch', function () {//watch
        return view('watch');
    });


   Route::get('/cart','Cartcontroller@index');
   Route::get('/cart/{id}', 'Cartcontroller@store');
   Route::delete('/cart/{id}', 'Cartcontroller@destroy');


   Route::get('/psearch','productcontroller@prosearch');


   Route::get('/order/{id}','OrderController@store');
   Route::get('/order','OrderController@index');
   Route::get('/orderstore2','OrderController@store2');
   Route::delete('/order/{id}', 'OrderController@destroy');



});
