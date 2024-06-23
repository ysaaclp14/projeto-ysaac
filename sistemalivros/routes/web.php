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
    })->middleware("auth")->name('books');
    Route::get('livros/cadastro', function(){
        return view('reg-book');
    })->middleware("auth")->name('reg-book');

    Route::post('livros/cadastro', [LibraryController::class, 'index'])->name('reg-book');
    Route::get('livros', [LibraryController::class, 'create'])->middleware("auth")->name('books');
    Route::get('livros/{id}/edit', [LibraryController::class, 'edit'])->name('books-edit');
    Route::put('livros/{id}', [LibraryController::class, 'update'])->name('books-update');
    Route::delete('livros/{id}', [LibraryController::class, 'destroy'])->name('books-destroy'); 
});
    

Route::get('cadastro', function() {
    return view('register');
});
Route::post('cadastro', [UserRegisterController::class, 'store'])
    ->name('register');

