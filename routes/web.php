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

Route::resource('events', 'EventsController');

Route::get('/loginEo', function () {
    return view('page.frontend.login.loginEo');
})->name('loginEo');

Route::get('/loginTenant', function () {
    return view('page.frontend.login.loginTenant');
})->name('loginTenant');

Route::get('/regist-eo', function (){
    return view('page.frontend.register.registerEo');
})->name('registEo');

Route::group(['namespace'  => 'Frontend\Auth\Regist'], function () {
    Route::post('/regist-eo', 'EoRegistController@registEo')->name('createEoUser');
});

Route::get('/registTenant', function (){
    return view('page.frontend.register.registerTenant');
})->name('registTenant');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
