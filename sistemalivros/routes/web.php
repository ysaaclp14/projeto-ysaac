<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TokenIsValid;



Route::middleware([TokenIsValid::class])->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');

    Route::get('home', [HomeController::class, 'index'])->name('home');
});

Route::controller(LoginController::class)->group(function(){
    Route::get('login', 'index')->name('index');
    Route::post('login', 'store')->name('store');
    Route::get('logout', 'destroy')->name('destroy');
    Route::post('/', [LoginController::class, 'login'])
        ->name('login');
});
    

Route::get('cadastro', function() {
    return view('register');
});
Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');


