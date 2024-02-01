<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ColorController;
use App\Http\Controllers\Admin\MaterialController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\Sub_CategoryController;
use App\Http\Controllers\Admin\ToneController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Login_userController;
use App\Models\Sub_Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/admin-home', function () {
    return view('admin.layout');
})->name('home_admin');

//login_Admin

Route::get('/admin/login', function () { return view('admin.auth.login');})->name('admin_login');
Route::post('/post_login_admin', [LoginController::class , 'authenticate'])->name('post_login_admin');
Route::get('/admin_logout', [LoginController::class, 'adminLogout'])->name('admin_logout');
Route::get('/admin/fogotpassword', function () { return view('admin.auth.fogot');})->name('admin_fogot');
Route::get('/admin/register', function () { return view('admin.auth.register');})->name('admin_register');
//Admin
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    //category
    Route::get('/category', [CategoryController::class , 'index'])->name('category');
    Route::get('create-category', [CategoryController::class , 'create'])->name('category.create');
    Route::post('post-category', [CategoryController::class , 'onCreate'])->name('category.post');
    Route::get('update-category/{id}', [CategoryController::class , 'edit'])->name('category.update');
    Route::post('put-category',[CategoryController::class, 'onEdit'])->name('category.put');
    Route::get('delete-category/{id}', [CategoryController::class , 'delete'])->name('category.delete');
    //subcategory 
    Route::get('/subcategory', [Sub_CategoryController::class , 'index'])->name('sub_category');
    Route::get('create-subcategory', [Sub_CategoryController::class , 'create'])->name('subcategory.create');
    Route::post('post-subcategory', [Sub_CategoryController::class , 'onCreate'])->name('subcategory.post');
    Route::get('update-subcategory/{id}', [Sub_CategoryController::class , 'edit'])->name('subcategory.update');
    Route::post('put-subcategory',[Sub_CategoryController::class, 'onEdit'])->name('subcategory.put');
    Route::get('delete-subcategory/{id}', [Sub_CategoryController::class , 'delete'])->name('subcategory.delete');
    //color
    Route::get('/color', [ColorController::class , 'index'])->name('color');
    Route::get('create-color', [ColorController::class , 'create'])->name('color.create');
    Route::post('post-color', [ColorController::class , 'onCreate'])->name('color.post');
    Route::get('update-color/{id}', [ColorController::class , 'edit'])->name('color.update');
    Route::post('put-color',[ColorController::class, 'onEdit'])->name('color.put');
    Route::get('delete-color/{id}', [ColorController::class , 'delete'])->name('color.delete');
    //material
    Route::get('/material', [MaterialController::class , 'index'])->name('material');
    Route::get('create-material', [MaterialController::class , 'create'])->name('material.create');
    Route::post('post-material', [MaterialController::class , 'onCreate'])->name('material.post');
    Route::get('update-material/{id}', [MaterialController::class , 'edit'])->name('material.update');
    Route::post('put-material',[MaterialController::class, 'onEdit'])->name('material.put');
    Route::get('delete-material/{id}', [MaterialController::class , 'detete'])->name('material.delete');
    //tone
    Route::get('/tone', [ToneController::class , 'index'])->name('tone');
    Route::get('create-tone', [ToneController::class , 'create'])->name('tone.create');
    Route::post('post-tone', [ToneController::class , 'onCreate'])->name('tone.post');
    Route::get('update-tone/{id}', [ToneController::class , 'edit'])->name('tone.update');
    Route::post('put-tone',[ToneController::class, 'onEdit'])->name('tone.put');
    Route::get('delete-tone/{id}', [ToneController::class , 'delete'])->name('tone.delete');
    //product
    Route::get('/product', [ProductController::class , 'index'])->name('product');
    Route::get('create-product', [ProductController::class , 'create'])->name('product.create');
    Route::post('post-product', [ProductController::class , 'onCreate'])->name('product.post');
    Route::get('update-product/{id}', [ProductController::class , 'edit'])->name('product.update');
    Route::post('put-product',[ProductController::class, 'onEdit'])->name('product.put');
    Route::get('delete-product/{id}', [ProductController::class , 'delete'])->name('product.delete');
    //user
    Route::get('/user', [UserController::class , 'index'])->name('user');
    Route::get('create-user', [UserController::class , 'create'])->name('user.create');
    Route::post('post-user', [UserController::class , 'onCreate'])->name('user.post');
    Route::get('update-user/{id}', [UserController::class , 'edit'])->name('user.update');
    Route::post('put-user',[UserController::class, 'onEdit'])->name('user.put');
    Route::get('delete-user/{id}', [UserController::class , 'delete'])->name('user.delete');
    //order
    Route::get('/order', [OrderController::class , 'show'])->name('order');
});



//User
Route::get('/', [HomeController::class , 'index'])->name('home_user');
Route::get('/login', function () { return view('frontend.auth.login');})->name('login');
Route::post('/post_login_user', [Login_userController::class , 'authenticate'])->name('post_login_user');
Route::get('/logout', [Login_userController::class, 'Logout'])->name('logout');
Route::get('/cart', [CartController::class , 'cart'])->name('cart');
Route::get('/carts/{id}', [CartController::class , 'addtoCart'])->name('addToCart');
Route::get('update-cart/{id}', [CartController::class , 'update'])->name('update_cart');
Route::get('delete-product/{productId}', [CartController::class , 'deleteProduct'])->name('delete_product');
Route::get('/check', [CartController::class , 'check'])->name('check');
Route::get('/order-complete', [CartController::class , 'order_complete'])->name('order_complete');
Route::post('/checkout', [CartController::class , 'checkout'])->name('checkout');
Route::get('/about', [HomeController::class , 'show_about'])->name('about');