<?php

// Manggil Controller
use App\Http\Controllers\DashboardController;

// Manggil Controller Produk
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\TampilanController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [TampilanController::class, 'index']);

//bikin routing untuk amanin data
Route::group(['middleware' => ['auth']], function () {
// Bikin routing ke halaman Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);
// Bikin raoyting ke halaman Produk
Route::get('/produk', [ProdukController::class, 'index']);
// Bikin raoyting ke halaman Create
Route::get('/produk/create', [ProdukController::class, 'create']);
// Bikin raoyting ke halaman Store
Route::post('/produk/store', [ProdukController::class, 'store']);
// Bikin raoyting ke halaman Edit
Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
// Bikin raoyting ke halaman Update
Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
// Bikin raoyting ke halaman Delete
Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
