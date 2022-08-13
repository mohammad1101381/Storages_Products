<?php

use Illuminate\Support\Facades\Route;

use App\shop_storages;
use App\shop_storages as AppShop_storages;
use Symfony\Component\HttpFoundation\Request;


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
Route::prefix('admin')->group(function () {
    Route::get('/storages/create', function () {

        return view('admin.storages.create');
    });
    Route::post('/storages/create', function () {
        
        shop_storages::create([
            'name' => request('sname'),
            'province_id' => request('pid'),
            'city_id' => request('cityid'),
            'zone_id' => request('zoneid'),
            'location' => request('location'),
            'status' => request('status'),
            'description' => request('description'),
            'manager' => request('manager'),
            'manager_id' => request('managerid'),
            'meterage' => request('meterage')
        ]);

        return back();
    });
    Route::get('storages/table', function() {
        return view('admin.storages.table');
    });
});
