<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SellerDashboardController;

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

Route::get('/back-admin/dashboard', [AdminDashboardController::class, 'index']);

Route::get('/back-farmer/dashboard', [FarmerDashboardController::class, 'index']);

Route::get('/back-seller/dashboard', [SellerDashboardController::class, 'index']);

require __DIR__.'/auth.php';
