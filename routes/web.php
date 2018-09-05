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

Route::get('/app', function () {
    return view('layout.app');
});

Route::get('/superadmin', 'SuperAdmin\SuperAdminController@Dashboard') ->name('superadmin.dashboard');
Route::get('/listadmin', 'SuperAdmin\SuperAdminController@ShowListAdmin') ->name('superadmin.showListAdmin');
Route::get('/addadmin', 'SuperAdmin\SuperAdminController@FormCreateAdmin') ->name('superadmin.formCreateAdmin');
Route::get('/profileadmin', 'SuperAdmin\SuperAdminController@ProfileAdmin') ->name('superadmin.profileAdmin');

Route::post('/superadminstore', 'SuperAdmin\SuperAdminController@Store') ->name('superadmin.admin.store');