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

Route::get('/', 'PageController@welcome');
Route::get('/services/{slug}', 'ServiceController@show');
Route::resource('feedback', 'ContactController',['only' => 'store']);

// --------------------
// Backpack\Demo routes
// --------------------
Route::group([
    'prefix'     => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace'  => 'Admin',
], function () {
    // CRUD resources and other admin routes
    CRUD::resource('service', 'ServiceCrudController');
    CRUD::resource('order', 'OrderCrudController');
    CRUD::resource('whatwedo', 'WhatWeDoCrudController');
    CRUD::resource('client', 'ClientCrudController');
    CRUD::resource('album', 'AlbumCrudController');
    CRUD::resource('gallery', 'GalleryCrudController');
    CRUD::resource('contact', 'ContactCrudController');
    CRUD::resource('slide', 'SlideCrudController');
});
Route::get('/services','PageController@services');
Route::get('/services_detail','PageController@service_detail');
Route::get('/whatwedo','PageController@whatwedo');
Route::get('/whatwedo_detail','PageController@whatwedo_detail');
Route::get('/contact','PageController@contact');
Route::get('/about','PageController@about');

/** CATCH-ALL ROUTE for Backpack/PageManager - needs to be at the end of your routes.php file  **/
Route::get('{page}/{subs?}', ['uses' => 'PageController@index'])
    ->where(['page' => '^((?!admin).)*$', 'subs' => '.*']);
