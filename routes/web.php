<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PromoController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\MemberMiddleware;
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

Route::get('/', [MemberController::class, 'welcome'])->name('home');
Route::get('/menu', [MemberController::class, 'view'])->name('menu.view');
Route::get('/search-menu', [MemberController::class, 'search'])->name('search.menu');

Route::middleware(['auth'])->group(function () {
    //member
    Route::group(['middleware' => MemberMiddleware::class], function(){
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->name('dashboard');
        Route::get('/cart', [MemberController::class, 'index'])->name('cart');
    });

    //admin
    Route::group(['middleware' => AdminMiddleware::class], function(){
        Route::get('/dashboard-admin', [AdminController::class, 'AdminDashboard'])->name('dashboard.admin');
        // Route::post('/couponts', [CoupontController::class, 'create'])->name('couponts.create');
        // Route::get('/couponts', [CoupontController::class, 'show'])->name('couponts.show');
        Route::post('/add-menu', [FoodController::class, 'create'])->name('menu.create');
        Route::post('/{mid}/update-menu', [FoodController::class, 'update'])->name('menu.update');
        Route::get('/{mid}/delete-menu', [FoodController::class, 'destroy'])->name('menu.delete');
        Route::post('/add-promotion', [PromoController::class, 'create'])->name('add.promo');
        Route::post('/add-time-promotion', [PromoController::class, 'createTimePromo'])->name('add.time.promo');
    });

});


require __DIR__.'/auth.php';
