<?php

use App\Http\Controllers\Web\Dashboard\DashboardController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('welcome');
});

Route::get('/blog', [DashboardController::class, 'blog']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/blog', function(){
    return view('frontend.app');
});

require __DIR__.'/auth.php';
