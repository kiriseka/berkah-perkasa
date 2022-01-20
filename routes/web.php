<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ItemController::class, 'index']);

Route::post('/detail/{id}', [ItemController::class, 'detail']);

Route::post('/transaksi/{id}', [ItemController::class, 'transaksi']);


// Route::get('/transaksi', function () {
//     return view('transaksi');
// });

Route::get('/status', function () {
    return view('status');
});

Route::get('/detail', function () {
    return view('warning');
});

Route::get('/transaksi', function () {
    return view('warning');
});