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

Route::get('/', function () {
    return view('welcome');
});

$json = array('value1', 'value2');

Route::get('/json', function () {
    $json2 = array();
    $json2 = json_encode($json);
    return $json;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


