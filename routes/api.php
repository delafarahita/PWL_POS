<?php

use App\Http\Controllers\Api\BarangController;
use App\Http\Controllers\Api\KategoriController;
use App\Http\Controllers\Api\LevelController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');

Route::post('/register1', App\Http\Controllers\Api\RegisterController::class)->name('register1');

Route::get('/barangs1', 'App\Http\Controllers\Api\BarangController@index');
Route::post('/barangs1', 'App\Http\Controllers\Api\BarangController@store');
Route::get('/barangs1/{id}', 'App\Http\Controllers\Api\BarangController@show');
Route::put('/barangs1/{id}', 'App\Http\Controllers\Api\BarangController@update');
Route::delete('/barangs1/{id}', 'App\Http\Controllers\Api\BarangController@destroy');

Route::get('/penjualans1', 'App\Http\Controllers\Api\DetailPenjualanController@index');
Route::post('/penjualans1', 'App\Http\Controllers\Api\DetailPenjualanController@store');
Route::get('/penjualans1/{id}', 'App\Http\Controllers\Api\DetailPenjualanController@show');
Route::put('/penjualans1/{id}', 'App\Http\Controllers\Api\DetailPenjualanController@update');
Route::delete('/penjualans1/{id}', 'App\Http\Controllers\Api\DetailPenjualanController@destroy');

Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::get('levels', [LevelController::class, 'index']);
Route::post('levels', [LevelController::class, 'store']);
Route::get('levels/{level}', [LevelController::class, 'show']);
Route::put('levels/{level}', [LevelController::class, 'update']);
Route::delete('levels/{level}', [LevelController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']);
Route::put('users/{user}', [UserController::class, 'update']);
Route::delete('users/{user}', [UserController::class, 'destroy']);

Route::get('barangs', [BarangController::class, 'index']);
Route::post('barangs', [BarangController::class, 'store']);
Route::get('barangs/{barang}', [BarangController::class, 'show']);
Route::put('barangs/{barang}', [BarangController::class, 'update']);
Route::delete('barangs/{barang}', [BarangController::class, 'destroy']);

// Route::get('penjualans', [KategoriController::class, 'index']);
// Route::post('transaksis', [KategoriController::class, 'store']);
// Route::get('transaksis/{kategori}', [KategoriController::class, 'show']);
// Route::put('transaksis/{kategori}', [KategoriController::class, 'update']);
// Route::delete('transaksis/{kategori}', [KategoriController::class, 'destroy']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
