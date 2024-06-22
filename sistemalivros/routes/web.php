<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\TokenIsValid;



Route::middleware([TokenIsValid::class])->group(function () {
    Route::get('/', function () {
        return view('login');
    })->name('login');

    
});
Route::get('home', [HomeController::class, 'index'])->middleware("auth")->name('home');

Route::controller(LoginController::class)->group(function(){
    Route::get('login', [LoginController::class, 'index'])->name('index');
    Route::post('login', [LoginController::class, 'store'])->name('store');
    Route::get('logout', [LoginController::class, 'destroy'])->name('destroy');
    Route::get('livros', function() {
        return view('books');
    })->name('books');
    Route::get('livros/cadastro', function(){
        return view('reg-book');
    })->name('reg-book');

    Route::post('livros/cadastro', [LibraryController::class, 'create'])->name('reg-book');
    
    
});
    

Route::get('cadastro', function() {
    return view('register');
});
Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

