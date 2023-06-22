<?php

// Panggil controller
use App\Http\Controllers\DashboardController;
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

Route::get('/', [TampilanController::class, 'index']);

// Bikin routing untuk amanin data
// Route::get('/', function () {
//     return view('welcome');
// });

    // Buat route untuk after_registrasi
    Route::get('/after_register', function () {
        return view('after_register');
    });

    Route::group(['middleware' => ['auth', 'peran:admin-manager']], function () {

    });
    
Route::group(['middleware' => ['auth']], function () {
    
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // Buat Routing Produk
    Route::get('/produk', [ProdukController::class, 'index']);
    Route::get('/produk/create', [ProdukController::class, 'create']);
    Route::post('/produk/store', [ProdukController::class, 'store']);
    Route::get('produk/edit/{id}', [ProdukController::class, 'edit']);
    Route::put('/produk/update/{id}', [ProdukController::class, 'update']);
    Route::get('/produk/delete/{id}', [ProdukController::class, 'destroy']);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Auth::routes();

// Bikin routing ke dashboard
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


