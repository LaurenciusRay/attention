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

Route::get('/registEo', function (){
    return view('page.frontend.register.registerEo');
})->name('registEo');

Route::post('/registEo', 'Frontend\Auth\Regist\RegisterEoController@create')->name('createUserEo');

Route::get('/registTenant', function (){
    return view('page.frontend.register.registerTenant');
})->name('registTenant');