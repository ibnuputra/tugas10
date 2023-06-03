<?php


use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AboutController;
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

Route::get('/', function () {
    return view('index');
});



//bikin routing ke halaman dasboard
Route::get('/dashboard', [DashboardController::class, 'index']);
//bikin routing ke halaman produk
Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produk', [ProdukController::class, 'index']);

Route::get('/produk', [FrontendController::class, 'index']);

Route::get('/produk', [AboutController::class, 'index']);