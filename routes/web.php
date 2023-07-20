<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;

Route::get('/',[AdminController::class,'Dashboard'])->name('dashboard');
Route::get('/dashboard',[AdminController::class,'Dashboard'])->name('dashboard');


Route::group(['prefix'=>'/categories'],function(){
    Route::get('/',[CategoryController::class,'GetCategories'])->name('categories');
    Route::post('/',[CategoryController::class,'CreateCategory'])->name('create-category');
    Route::get('/{category_id}',[CategoryController::class,'GetOneCategory'])->name("get-one-category");
    Route::delete('/{category_id}',[CategoryController::class,'DeleteCategory'])->name("delete-category");
    Route::put('/{category_id}',[CategoryController::class,'UpdateCategory'])->name('update-category');});
