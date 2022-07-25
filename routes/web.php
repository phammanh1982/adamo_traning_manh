<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\MainController;
use \App\Http\Controllers\Admin\ProductController;
use \App\Http\Controllers\Admin\LoginController;
use \App\Http\Controllers\Admin\CategoriController;
use \App\Http\Controllers\TemplateController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
//Login
Route::get('/admin1/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin1/login/post', [LoginController::class, 'login']);




//Admin
Route::prefix('admins')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin');
    //Product
    Route::prefix('product')->group(function () {
        Route::get('/add', [ProductController::class, 'create']);
        Route::post('/get_sub_categori', [ProductController::class, 'get_sub_categori']);
        Route::post('/add', [ProductController::class, 'store']);
        Route::get('/list', [ProductController::class, 'list']);
    });

    //Categories
    Route::prefix('categori')->group(function () {
        Route::get('/add', [CategoriController::class, 'create']);
        Route::post('/add', [CategoriController::class, 'store']);
        Route::get('/list', [CategoriController::class, 'list']);
        Route::get('/edit/{categori}', [CategoriController::class, 'edit']);
        Route::post('/edit/{categori}', [CategoriController::class, 'update']);
    });
});

Route::get('/', [TemplateController::class, 'index']);
//Lấy sản phẩm theo danh mục
Route::post('/product_categori', [ProductController::class, 'product_categori']);




//Tìm kiếm



Route::get('/danh-muc/{list_products}', [TemplateController::class, 'list_products']);
Route::get('/danh-muc', [TemplateController::class, 'product_search']);

Route::get('/san-pham/{product}', [TemplateController::class, 'detail_product']);