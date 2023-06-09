<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RecapController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\SellerRecapController;
use App\Http\Controllers\HomeCustomerController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SellerMaterialController;
use App\Http\Controllers\FarmerDashboardController;
use App\Http\Controllers\SellerDashboardController;
use App\Http\Controllers\FarmerMonitoringController;
use App\Http\Controllers\CustomerDashboardController;
use App\Http\Controllers\FarmerTransactionController;
use App\Http\Controllers\SellerTransactionController;

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
    // return redirect('/back-login');
    return view('basic-trigger');
});

Route::get('/home', [HomeCustomerController::class, 'indexHome']);
Route::get('/product', [HomeCustomerController::class, 'indexProduct']);
Route::get('/product-detail/{product}', [HomeCustomerController::class, 'show']);


Route::get('/back-dashboard', [HomeController::class, 'index'])->name('back-dashboard');

Route::group(['middleware' => ['role:admin']], function () {
    Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);
});


Route::group(['middleware' => ['role:farmer']], function () {
    Route::get('/back-farmer/dashboard', [FarmerDashboardController::class, 'index']);

    Route::get('/back-farmer/material', [MaterialController::class, 'index']);
    Route::post('/back-farmer/material/new', [MaterialController::class, 'store']);
    // Route::post('/back-farmer/material/edit/{material}', [MaterialController::class, 'edit']);
    Route::get('/back-farmer/material/edit/{material}', [MaterialController::class, 'edit']);
    Route::put('/back-farmer/material/update/{material}', [MaterialController::class, 'update']);
    Route::delete('/back-farmer/material/destroy/{material}', [MaterialController::class, 'destroy']);

    // Route::get('/back-farmer/monitor-product', [FarmerMonitoringController::class, 'monitor_product']);
    Route::get('/back-farmer/monitor-material', [FarmerMonitoringController::class, 'monitor_material']);
    Route::post('/back-farmer/material/new', [MaterialController::class, 'store']);
    Route::post('/back-farmer/material/edit/{material}', [MaterialController::class, 'edit']);
    Route::put('/back-farmer/material/update/{material}', [MaterialController::class, 'update']);
    Route::delete('/back-farmer/material/destroy/{material}', [MaterialController::class, 'destroy']);
    
    Route::get('/back-farmer/history-transaction', [FarmerTransactionController::class, 'history']);
    Route::get('/back-farmer/transaction', [FarmerTransactionController::class, 'index']);
    // Route::post('/back-farmer/transaction/new', [FarmerTransactionController::class, 'store']);
    Route::post('/back-farmer/transaction/edit/{transaction}', [FarmerTransactionController::class, 'edit']);
    Route::put('/back-farmer/transaction/update/{transaction}', [FarmerTransactionController::class, 'update']);
    // Route::post('/back-farmer/transaction/update/{transaction}', [FarmerTransactionController::class, 'update']);
    // Route::delete('/back-farmer/transaction/destroy/{transaction}', [FarmerTransactionController::class, 'destroy']);
    
    Route::get('/back-farmer/recap', [RecapController::class, 'index']);
    
    
});

Route::group(['middleware' => ['role:seller']], function () {
    
    Route::get('/back-seller/dashboard', [SellerDashboardController::class, 'index']);
    
    Route::get('/back-seller/product', [ProductController::class, 'index']);
    Route::post('/back-seller/product/new', [ProductController::class, 'store']);
    Route::get('/back-seller/product/edit/{product}', [ProductController::class, 'edit']);
    Route::put('/back-seller/product/update/{product}', [ProductController::class, 'update']);
    Route::delete('/back-seller/product/destroy/{product}', [ProductController::class, 'destroy']);

    Route::get('/back-seller/material', [SellerMaterialController::class, 'index']);
    Route::get('/back-seller/material/add', [SellerMaterialController::class, 'create']);
    Route::post('/back-seller/material/new', [SellerMaterialController::class, 'store']);
    Route::post('/back-seller/material/order', [FarmerTransactionController::class, 'store']);
    Route::get('/back-seller/material/edit/{material}', [SellerMaterialController::class, 'edit']);
    Route::put('/back-seller/material/update/{material}', [SellerMaterialController::class, 'update']);
    Route::delete('/back-seller/material/destroy/{material}', [SellerMaterialController::class, 'destroy']);
    
    Route::get('/back-seller/history-transaction', [SellerTransactionController::class, 'history']);
    Route::get('/back-seller/transaction', [SellerTransactionController::class, 'index']);
    // Route::post('/back-seller/transaction/new', [SellerTransactionController::class, 'store']);
    Route::post('/back-seller/transaction/edit/{transaction}', [SellerTransactionController::class, 'confirm']);
    Route::put('/back-seller/transaction/update/{transaction}', [SellerTransactionController::class, 'updateSeller']);
    // Route::post('/back-seller/transaction/update/{transaction}', [SellerTransactionController::class, 'update']);
    // Route::delete('/back-seller/transaction/destroy/{transaction}', [SellerTransactionController::class, 'destroy']);
    
    Route::get('/back-seller/review', [ReviewController::class, 'indexSeller']);
    Route::get('/back-seller/recap', [SellerRecapController::class, 'index']);
});


Route::group(['middleware' => ['role:customer']], function () {
    Route::get('/back-customer/dashboard', [CustomerDashboardController::class, 'index']);
    
    Route::get('/back-customer/profile', [ProfileController::class, 'index']);
    Route::get('/back-customer/profile/edit/{user}', [ProfileController::class, 'edit']);
    Route::put('/back-customer/profile/update/{user}', [ProfileController::class, 'update']);

    Route::get('/back-customer/history-transaction', [SellerTransactionController::class, 'historyCustomer']);
    Route::get('/back-customer/transaction', [SellerTransactionController::class, 'indexCustomer']);
    Route::post('/back-customer/transaction/new/{product}', [SellerTransactionController::class, 'store']);
    Route::post('/back-customer/transaction/edit/{transaction}', [SellerTransactionController::class, 'edit']);
    Route::put('/back-customer/transaction/update/{transaction}', [SellerTransactionController::class, 'update']);
    // Route::post('/back-customer/transaction/update/{transaction}', [SellerTransactionController::class, 'update']);
    // Route::delete('/back-customer/transaction/destroy/{transaction}', [SellerTransactionController::class, 'destroy']);
    Route::get('/back-customer/review', [ReviewController::class, 'indexCustomer']);
    Route::post('/back-customer/review/new/{product}', [ReviewController::class, 'store']);

    
});

require __DIR__.'/auth.php';
