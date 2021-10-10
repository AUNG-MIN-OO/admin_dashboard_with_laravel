<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware('auth')->prefix('admin_dashboard')->group(function (){
    Route::get('/home', function () {
        return view('admin_panel.category.home');
    })->name('home');
    Route::resource('/category',\App\Http\Controllers\CategoryController::class);
});

