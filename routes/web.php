<?php

use App\Http\Controllers\Home_Controller;
use Illuminate\Support\Facades\Route;
use App\shop_storages;
use App\shop_storages as AppShop_storages;
use Symfony\Component\HttpFoundation\Request;
use Illuminate\Support\Facades\Validator;

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

Route::get('/', 'Home_Controller@Home');
Route::prefix('admin')->group(function () {
    Route::get('/storages/create', 'StoragesController@create');
    Route::get('/storages/add', 'StoragesController@add_product_to_storage');
    Route::post('/storages/product_to_storage_save', 'StoragesController@add_product_to_storage_save')->name('add.prod.storage.save');
    Route::post('/storages/create', 'StoragesController@index');
    Route::get('/storages/table', 'StoragesController@table')->name('storage.list');
    Route::post('/storages/create', 'StoragesController@store');
    Route::post('/storages/create','StoragesController@demo')->name('admin.store');
    Route::get('/storages/add_product_to_storage', 'StoragesController@createstorage');
    Route::get('/storages/list', 'StoragesController@listproduct')->name('product.storage.list');
//    Route::post('/storages/add_product_to_storage', 'StoragesController@recive');
    Route::get('/storages/{id}/edit', "StoragesController@edit");
    Route::post('/storages/{id}/edit', "StoragesController@editpost")->name('edit.storage.save');

    Route::get('/storages/{id}/editproduct', "StoragesController@editproduct");
    Route::post('/storages/{id}/editproduct', "StoragesController@editproductpost")->name('edit.product.post');
}); 