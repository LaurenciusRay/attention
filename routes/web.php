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
    return view('page.index');
});

// tenant list routes
Route::resource('tenants', 'TenantController', [
    'only' => ['tenants', 'index']
]);

// events route
Route::resource('events', 'EventsController');

// tenant products route
Route::resource('products', 'ProductController');

// Route::get('/tenants/search','TenantController@search');