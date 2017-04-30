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

Route::get('amwaj', function () {
     return view ('amwaj', [
     'name' => 'CH9'
     ]);
});

// Query Builder in action
Route::get('wsdb', function () {
$workshops = DB::table('workshops')->latest()->get();
return view('wsdb', compact('workshops'));
});

// wildcard
Route::get('/workshops/{workshop}', function () {
$workshops = DB::table('workshops')->latest()->get();
return view('wsdb', compact('workshops'));
});
