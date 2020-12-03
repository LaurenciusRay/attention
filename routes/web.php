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
Route::get('/event-organizer/{eventorganizer}', 'events\EventOrganizerController@index')->name('eventorganizer.index');

Auth::routes();

// event list routes
Route::resource('events', 'events\EventsController');

Route::namespace('Frontend')->group(function () {
    Route::namespace('EventOrganizer')->group(function () {
        Route::get('/regist-eo','AuthController@viewFormRegistEo')->name('regist.eo-user-form');
        Route::post('/regist-eo', 'AuthController@registEo')->name('regist.eo-user');
        Route::get('/login-eo', 'AuthController@formLogin')->name('login.eo-user-form')->middleware('block-tenant-user:tenantuser');
        Route::post('/login-eo', 'AuthController@login')->name('login.eo-user');
    });
    Route::namespace('Tenant')->group(function () { 
        Route::get('/regist-tenant', 'AuthController@viewFormRegistTenant')->name('regist.tenant-user-form');
        Route::post('/regist-tenant', 'AuthController@registTenant')->name('regist.tenant-user');
        Route::get('/login-tenant', 'AuthController@formLogin')->name('login.tenant-user-form')->middleware('block-eo-user:eouser');
        Route::post('/login-tenant', 'AuthController@login')->name('login.tenant-user');
    });
});

Route::get('/unauthorized', function() {
    return view('page.frontend.403');
});

Route::middleware(['auth:eouser'])->name('eouser.')->group(function(){
    // all route for logged in eouser
    
    // route sample
    Route::get('/sample-eouser', function (){
        return view('page.frontend.sample.logged_in_eo');
    })->name('logged-in');

    // route event
    Route::resource('events', 'events\EventsController')->only(['create', 'store']);
}); 

Route::middleware(['auth:tenantuser'])->name('tenantuser.')->group(function(){
    // route for logged in tenant user
    Route::get('/sample-tenant', function () {
        return view('page.frontend.sample.logged_in_tenant');
    })->name('logged-in');
}); 

// tenant list routes
Route::resource('tenants', 'TenantController');

// tenant products route
Route::resource('products', 'ProductController');

// Route::get('/tenants/search','TenantController@search');
// tenant detail route
Route::get('/tenant/{id}', 'TenantController@detail');

Route::resource('events-categories', 'admin\EventCategoryController');

// event booth 
Route::get('events/createbooth/{title}/{capacity}', 'events\EventsController@createbooth')->name('createboothnew');
Route::post('/events/createbooth/insert', 'events\EventsController@addbooth')->name('addbooth');
