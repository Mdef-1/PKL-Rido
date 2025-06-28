<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SiswaController;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EcommerceController;



route::get('sample', function () {
    return 'Hallo Farelll';
});

Route::get('sample2', function () {
    return view('sample2');
});

Route::get('sample3', [LatihanController::class, 'index']);

Route::get('/siswa', [SiswaController::class, 'index']);

Route::get('/ortu', [SiswaController::class, 'index2']);

Route::get('/', [EcommerceController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('latihan-js', function () {
    return view('latihan-js');
});
// latihan route
route::get('testing', function () {
    return view('');
});


route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'middleware' => ['auth', IsAdmin::class]
], function () {
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/category', CategoryController::class);
    Route::resource('/product', ProductController::class);
});

route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'middleware' => ['auth', IsAdmin::class]
], function () {
    route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});
route::group([
    'middleware' => ['auth']

], function () {
    Route::post('/order', [EcommerceController::class, 'createOrder'])->name('order.create');
    Route::get('/checkout', [EcommerceController::class, 'checkout'])->name('checkout');
    Route::get('/my-orders', [EcommerceController::class, 'myOrders'])->name('orders.my');
    Route::get('/order/{id}', [EcommerceController::class, 'orderDetail'])->name('order.detail');
});

Route::group([
    'middleware' => ['auth']
], function () {
    Route::post('/order', [EcommerceController::class, 'createOrder'])->name('order.create');
    Route::get('/my-orders', [EcommerceController::class, 'myOrders'])->name('orders.my');
    Route::get('/my-orders/{id}', [EcommerceController::class, 'orderDetail'])->name('order.detail');
    Route::post('/order/update-quantity', [EcommerceController::class, 'updateQuantity'])->name('order.update.quantity');
    Route::post('/order/remove-item', [EcommerceController::class, 'removeItem'])->name('order.remove.item');
    Route::post('/checkout', [EcommerceController::class, 'checkout'])->name('checkout');
});
