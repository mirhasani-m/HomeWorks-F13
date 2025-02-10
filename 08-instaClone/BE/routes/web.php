<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/' , 'pages.welcome',['title' => 'مزرعه طلایی']) ;
Route::view('/about' , 'pages.about',['title' => 'مزرعه طلایی']) ;
Route::view('/products' , 'pages.products',['title' => 'مزرعه طلایی']) ;
Route::view('/contact' , 'pages.contact',['title' => 'مزرعه طلایی']) ;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
