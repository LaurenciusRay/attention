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

Auth::routes();

Route::resource('events', 'EventsController');

Route::namespace('Frontend\Auth\Regist')->name('regist.')->group(function () {
    Route::get('/regist-eo','EoRegistController@formRegist')->name('eo-user-form');
    Route::post('/regist-eo', 'EoRegistController@registEo')->name('eo-user');
    Route::get('/regist-tenant', 'TenantRegistController@formRegist')->name('tenant-user-form');
    Route::post('/regist-tenant', 'TenantRegistController@registTenant')->name('tenant-user');
});

Route::namespace('Frontend\Auth\Login')->name('login.')->group(function () {
    Route::get('/login-eo', 'EoLoginController@formLogin')->name('eo-user-form');
    Route::get('/login-tenant', 'TenantLoginController@formLogin')->name('tenant-user-form');
    Route::post('/login-eo', 'EoLoginController@login')->name('eo-user');
    Route::post('/login-tenant', 'TenantLoginController@login')->name('tenant-user');
});

Route::middleware('auth:eouser')->name('eouser.')->group(function(){
    // route for logged in eouser
    Route::get('/sample-eouser', function (){
        return view('page.frontend.sample.logged_in_eo');
    })->name('logged-in');
}); 

Route::middleware('auth:tenantuser')->name('tenantuser.')->group(function(){
    // route for logged in tenant user
    Route::get('/sample-tenant', function () {
        return view('page.frontend.sample.logged_in_tenant');
    })->name('logged-in');
}); 

// tenant list routes
Route::resource('tenants', 'TenantController');

// tenant detail route
Route::get('/tenant/{id}','TenantController@detail');
