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
// welcome.blade.php
Route::get('/', function () {
    return view('welcome');
});

// home.blade.php
Route::get("/home", function () {
    return view('home');
}) ->name("home");

// names.blade.php
Route::get("/names", "NameController@getAllNames")->name("names");

// nameInfo.blade.php
Route::get("name/get/{type}/{id}/", "NameController@nameInfo")->name("name.info");

// getting form info
Route::post("/names/get/", "NameController@getNames")->name("names.get");
