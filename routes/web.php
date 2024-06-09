<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::inertia('/', 'Index');
Route::get('/', [PostController::class,'Index'])->name('Home');
Route::get('/create',[PostController::class,'create'])->name('Create');
Route::post('/store',[PostController::class,'store'])->name('Store');
Route::get('/show/{post}', [PostController::class,'show'])->name('Show');
Route::get('/edit/{post}', [PostController::class,'edit'])->name('Edit');
Route::put('/update/{post}',[PostController::class,'update'])->name('Update');
Route::delete('/delete/{post}', [PostController::class,'destroy'])->name('Delete');
