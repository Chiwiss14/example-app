<?php

use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/products', [HomeController::class, 'productPage'])->name('products');
Route::get('/carts', [HomeController::class, 'cartPage'])->name('carts');
Route::get('/checkout', [HomeController::class, 'checkoutPage'])->name('checkout');
Route::get('/productdetails', [HomeController::class, 'productdetailsPage'])->name('productdetails');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    Route::get('/test', [ProfileController::class, 'test'])->name('profile.test');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


    Route::get('/add-category', [CategoryController::class, 'addCategory'])->name('admin.category.add');
    Route::post('/store-category', [CategoryController::class, 'store'])->name('admin.category.store');


    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('admin.product.add');
    Route::post('/store-product', [ProductController::class, 'store'])->name('admin.product.store');
    Route::get('/all-product', [ProductController::class, 'products'])->name('admin.product.all');
    Route::get('/edit-product/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
    Route::post('/update-product/{id}', [ProductController::class, 'update'])->name('admin.product.update');
    Route::get('/view-product/{id}', [ProductController::class, 'view'])->name('admin.product.view');
    Route::get('/delete-product/{id}', [ProductController::class, 'delete'])->name('admin.product.delete');


    Route::get('/store-blog', [BlogsController::class, 'blogs'])->name('admin.blogs');
    Route::post('/blogs', [BlogsController::class, 'store'])->name('admin.blogs.store');






});

require __DIR__.'/auth.php';

