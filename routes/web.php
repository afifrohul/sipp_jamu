<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\FarmerDashboardController;
use App\Http\Controllers\FarmerMonitoringController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MaterialController;

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
    return redirect('/back-login');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/back-dashboard', [HomeController::class, 'index'])->name('back-dashboard');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);
});


Route::group(['middleware' => ['role:farmer']], function () {
    Route::get('/back-farmer/dashboard', [FarmerDashboardController::class, 'index']);

    Route::get('/back-farmer/material', [MaterialController::class, 'index']);
    Route::post('/back-farmer/material/new', [MaterialController::class, 'store']);
    Route::post('/back-farmer/material/edit/{material}', [MaterialController::class, 'edit']);
    Route::put('/back-farmer/material/update/{material}', [MaterialController::class, 'update']);
    Route::delete('/back-farmer/material/destroy/{material}', [MaterialController::class, 'destroy']);

    Route::get('/back-farmer/monitor-product', [FarmerMonitoringController::class, 'index']);
    // Route::post('/back-farmer/material/new', [MaterialController::class, 'store']);
    // Route::post('/back-farmer/material/edit/{material}', [MaterialController::class, 'edit']);
    // Route::put('/back-farmer/material/update/{material}', [MaterialController::class, 'update']);
    // Route::delete('/back-farmer/material/destroy/{material}', [MaterialController::class, 'destroy']);
});

Route::group(['middleware' => ['role:seller']], function () {
    
    Route::get('/back-seller/dashboard', [SellerDashboardController::class, 'index']);

    Route::get('/back-seller/product', [ProductController::class, 'index']);
    Route::post('/back-seller/product/new', [ProductController::class, 'store']);
    Route::post('/back-seller/product/edit/{product}', [ProductController::class, 'edit']);
    Route::put('/back-seller/product/update/{product}', [ProductController::class, 'update']);
    Route::delete('/back-seller/product/destroy/{product}', [ProductController::class, 'destroy']);
});


require __DIR__.'/auth.php';
