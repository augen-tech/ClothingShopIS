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
Route::post('/admincreatecitystore', 'Admin\AdminController@CreateCityStore') ->name('admin.admin.createCityStore');
Route::post('/admincreateprovincestore', 'Admin\AdminController@CreateProvinceStore') ->name('admin.admin.createProvinceStore');
Route::post('/admincreatedeliverstore', 'Admin\AdminController@CreateDeliverStore') ->name('admin.admin.createDeliverStore');
Route::post('/admincreatecolorstore', 'Admin\AdminController@CreateColorStore') ->name('admin.admin.createColorStore');
Route::post('/admincreateitemtypestore', 'Admin\AdminController@CreateItemTypeStore') ->name('admin.admin.createItemTypeStore');
Route::post('/admincreatesupplierstore', 'Admin\AdminController@CreateSupplierStore') ->name('admin.admin.createSupplierStore');

Route::get('/createCity', 'Admin\AdminController@CreateCity') ->name('admin.createCity');
Route::get('/createProvince', 'Admin\AdminController@CreateProvince') ->name('admin.createProvince');
Route::get('/createDeliver', 'Admin\AdminController@CreateDeliver') ->name('admin.createDeliver');
Route::get('/createColor', 'Admin\AdminController@CreateColor') ->name('admin.createColor');
Route::get('/createItemType', 'Admin\AdminController@CreateItemType') ->name('admin.createItemType');
Route::get('/createSupplier', 'Admin\AdminController@CreateSupplier') ->name('admin.createSupplier');
Route::get('/listProvince', 'Admin\AdminController@listProvince') ->name('admin.listProvince');