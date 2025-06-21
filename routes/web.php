<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\SiswaController;;

Route::get('/', function () {
    return view('welcome');
});

route::get('sample', function () {
    return 'Hallo Farelll';
});

Route::get('sample2', function ()  {
    return view('sample2');
});

Route::get('sample3', [LatihanController::class, 'index']   );

Route::get('/siswa', [SiswaController::class, 'index' ]);

Route::get('/ortu', [SiswaController::class, 'index2' ]);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
