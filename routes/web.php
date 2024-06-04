<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name(('home'));

Route::get('/category', [CategoryController::class, 'index'])->name('category_list');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category_create');
Route::post('/category/store', [CategoryController::class, 'store'])->name('category_store');
Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category_edit');
Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category_update');
Route::get('/category/delete/{id}', [CategoryController::class, 'delete'])->name('category_delete');
