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
Route::get('/admin', function () {
    return view('admin.index');
});



Route::namespace('Frontend\Auth\Regist')->name('regist.')->group(function () {
    Route::get('/regist-eo', 'EoRegistController@formRegistEo')->name('eo-user-form');
    Route::post('/regist-eo', 'EoRegistController@registEo')->name('eo-user');
    Route::get('/regist-tenant', 'TenantRegistController@formRegistTenant')->name('tenant-user-form');
    Route::post('/regist-tenant', 'TenantRegistController@registTenant')->name('tenant-user');
});

Route::namespace('Frontend\Auth\Login')->name('login.')->group(function () {
    Route::get('/login-eo', 'EoLoginController@formLoginEo')->name('eo-user-form');
    Route::get('/login-tenant', 'TenantLoginController@formLoginTenant')->name('tenant-user-form');
});
// tenant list routes
Route::resource('tenants', 'TenantController');

// tenant detail route
Route::get('/tenant/{id}', 'TenantController@detail');

// event list 
Route::resource('events', 'events\EventsController');
Route::resource('events-categories', 'admin\EoDetailCategoryController');
// event booth 
Route::get('events/createbooth/{title}/{capacity}', 'events\EventsController@createbooth')->name('createboothnew');
Route::post('/events/createbooth/insert', 'events\EventsController@addbooth')->name('addbooth');
