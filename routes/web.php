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
});
