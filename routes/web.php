<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/',[userController::class, 'index']);
Route::get('/shop',[userController::class, 'shop'])->name('shop');

Route::fallback(function(){
    return view('pages.404');
});

Auth::routes();

Route::middleware('auth','auth.user')->group(function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboardAdmin');

        Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
        Route::get('/produk/create', [ProdukController::class, 'create'])->name('produk.create');
        Route::post('/produk/store', [ProdukController::class, 'store'])->name('produk.store');
        // Route::get('/produk/show/{id}', [ProdukController::class, 'show']);
        Route::get('/produk/edit/{id}', [ProdukController::class, 'edit']);
        Route::put('/admin/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
        Route::delete('/produk/delete/{id}', [ProdukController::class, 'destroy'])->name('hapus');
    });
});

// Route::middleware('auth', 'auth.admin')->group(function(){
//     Route::get('/admin', [AdminController::class,'index'])->name('admin.index');
// });

Route::get('login/google', [LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [LoginController::class, 'redirectToGoogleCallback']);
