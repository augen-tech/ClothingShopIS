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
Route::get('/listshopbrand', 'SuperAdmin\SuperAdminController@ListShopBrand') ->name('superadmin.listShopBrand');
Route::get('/addadmin', 'SuperAdmin\SuperAdminController@FormCreateAdmin') ->name('superadmin.formCreateAdmin');
Route::get('/profileadmin/{id}', 'SuperAdmin\SuperAdminController@ProfileAdmin') ->name('superadmin.profileAdmin');
Route::get('/createbrand', 'SuperAdmin\SuperAdminController@FormCreateBrand') ->name('superadmin.formCreateBrand');

Route::get('/destroyAdmin/{id}', 'SuperAdmin\SuperAdminController@destroyAdmin')->name('superadmin.destroyAdmin');
Route::get('/destroyShopBrand/{id}', 'SuperAdmin\SuperAdminController@destroyShopBrand')->name('superadmin.destroyShopBrand');

Route::get('/editadmin/{id}', 'SuperAdmin\SuperAdminController@FormEditAdmin') ->name('superadmin.formEditAdmin');
Route::post('/superadmin/updateadmin/{id}', 'SuperAdmin\SuperAdminController@UpdateAdmin') ->name('superadmin.admin.update');
Route::post('/superadmin/updatebrand/{id}', 'SuperAdmin\SuperAdminController@UpdateBrand') ->name('superadmin.brand.update');

Route::post('/superadminstore', 'SuperAdmin\SuperAdminController@Store') ->name('superadmin.admin.store');
Route::post('/brandstore', 'SuperAdmin\SuperAdminController@BrandStore') ->name('superadmin.brand.store');
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
Route::get('/listCity', 'Admin\AdminController@listCity') ->name('admin.listCity');
Route::get('/listItemType', 'Admin\AdminController@listItemType') ->name('admin.listItemType');
Route::get('/listColor', 'Admin\AdminController@listColor') ->name('admin.listColor');

Route::get('/destroyProvince/{id}', 'Admin\AdminController@destroyProvince')->name('admin.destroyProvince');
Route::get('/destroyCity/{id}', 'Admin\AdminController@destroyCity')->name('admin.destroyCity');
Route::get('/destroyColor/{id}', 'Admin\AdminController@destroyColor')->name('admin.destroyColor');
Route::get('/destroyItemType/{id}', 'Admin\AdminController@destroyItemType')->name('admin.destroyItemType'); 