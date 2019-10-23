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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/', function() {
//    return 'welcome';
//});


//Route::get('/', function() {
//    return view('welcome');
//});

Route::get('/', function() {
    return redirect('welcome');
});

Route::get('welcome', function() {
    return view('welcome');
});

//Route::get('hello/{name}', function($name) {
//    return 'Hello, '.$name;
//});
//
//Route::get('hello/{name?}', function($name = 'Everybody') {
//    return 'Hello, '.$name;
//});

Route::get('test', function() {
    return 'test';
});

Route::get('hello/{name?}', ['as' => 'hello.index', function($name =
                                                             'Everybody') {
    return 'Hello, '.$name;
} ] );
