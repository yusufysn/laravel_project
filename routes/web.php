<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\AjaxController;



Route::group(['middleware'=>'sitesetting'], function(){
    Route::get('/', [PageHomeController::class, 'index'])->name('anasayfa');

    Route::get('/contact', [PageController::class, 'contact'])->name('iletisim');
    Route::post('/contact/save', [AjaxController::class, 'iletisimkaydet'])->name('iletisim.kaydet');

    Route::get('/products', [PageController::class, 'product'])->name('product');
    Route::get('/product/{slug}', [PageController::class, 'productDetail'])->name('productDetail');
});
