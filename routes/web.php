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

/* Route::view('/welcome', 'welcome'); */

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user/{id}/{name}', function($id = null, $name = null) {
    return 'User ' . $id . ' - ' . $name;
})->where([
    'id' => '[0-9]+',
    'name' => '[A-Za-z]+'
]);

/* Route::get('/users', function() {
    return 'Hello World';
}); */

/* Route::get('rota-b', function() {
    return "você está na rota-b";
}); */


