<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PropertyController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;

use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[AdminController::class,'Dashboard'])->middleware(['auth'])->name('dashboard');
Route::get('/dashboard',[AdminController::class,'Dashboard'])->middleware(['auth'])->name('dashboard');


Route::group(['prefix'=>'/categories','middleware'=>['auth','role:admin']],function(){
    Route::get('/',[CategoryController::class,'GetCategories'])->name('categories');
    Route::post('/',[CategoryController::class,'CreateCategory'])->name('create-category');
    Route::get('/{category_id}',[CategoryController::class,'GetOneCategory'])->name("get-one-category");
    Route::delete('/{category_id}',[CategoryController::class,'DeleteCategory'])->name("delete-category");
    Route::put('/{category_id}',[CategoryController::class,'UpdateCategory'])->name("update-category");
});

Route::group(['prefix'=>'/properties'],function(){
    Route::post('/',[PropertyController::class,"CreateProperty"])->middleware(['auth','role:admin'])->name("create-property");
    Route::put('/{property_id}',[PropertyController::class,"UpdateProperty"])->name("update-property");
    Route::delete('/{property_id}',[PropertyController::class,"RemoveProperty"])->name("remove-property");
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::group(['prefix'=>'users','middleware'=>['auth','role:admin']],function (){
    Route::get('/',[UserController::class,'GetUsers'])->name('users');
});

Route::get('product/categories', [ProductsController::class, 'GetCategories'])->name('products');
Route::get('product/categories/{category_id}', [ProductsController::class, 'GetOneCategories'])->name('productsOneCategory');
Route::post('product/categories/',[ProductsController::class,"CreateProduct"])->middleware(['auth','role:admin'])->name("create-product");
Route::delete('product/categories/{property_id}',[ProductsController::class,"Removeproduct"])->name("remove-product");



Route::group(['middleware'=>'sitesetting'], function(){
    Route::get('/home', [PageHomeController::class, 'index'])->name('anasayfa');

    Route::get('/contact', [PageController::class, 'contact'])->name('iletisim');
    Route::post('/contact/save', [AjaxController::class, 'iletisimkaydet'])->name('iletisim.kaydet');

    Route::get('/products', [PageController::class, 'product'])->name('product');
    Route::get('/product/{slug}', [PageController::class, 'productDetail'])->name('productDetail');

    Route::get('/cart', [CartController::class, 'index'])->name('sepet');
    Route::post('/cart/add', [CartController::class, 'add'])->name('sepet.ekle');
    Route::patch('/cart/update', [CartController::class, 'update'])->name('sepet.update');
    Route::delete('/cart/remove', [CartController::class, 'remove'])->name('sepet.sil');
});

Route::prefix('panel')->middleware(['auth','sitesetting','role:admin',])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('panel.index');
    Route::get('/slider', [SliderController::class, 'index'])->name('slider.index');
    Route::get('/slider/ekle', [SliderController::class, 'create'])->name('slider.create');
    Route::get('/slider/{id}/edit', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('/slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::put('/slider/{id}/update', [SliderController::class, 'update'])->name('slider.update');
    Route::delete('/slider/{id}/destroy', [SliderController::class, 'destroy'])->name('slider.destroy');

    Route::resource('/category', CategoryController::class)->except('destroy');
    Route::delete('/category/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');

    Route::resource('/product', ProductsController::class)->except('destroy');
    Route::delete('/product/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
    Route::get('/contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
    Route::put('/contact/{id}/update', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact/{id}/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');
});


require __DIR__.'/auth.php';
