<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilesController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\TestimoniController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {
    Route::post('admin', [AuthController::class, 'login']);
    Route::post('register', [AuthController::class, 'register']);
    Route::post('logout', [AuthController::class, 'logout']);
});

Route::post('login_member', [AuthController::class, 'login_member_action_api']);
Route::get('files/{filename}',[FilesController::class,'index']);

Route::group([
    'middleware' => 'api'
], function () {
    Route::resources([
        'categories' => CategoryController::class,
        'subcategories' => SubcategoryController::class,
        'sliders' => SliderController::class,
        'products' => ProductController::class,
        'members' => MemberController::class,
        'testimonis' => TestimoniController::class,
        'reviews' => ReviewController::class,
        'orders' => OrderController::class,
        'payments' => PaymentController::class,
        'carts' => CartsController::class
    ]);

    Route::get('carts/delete/{id}',[CartsController::class,'hapusCart']);

    Route::get('pesanan/baru', [OrderController::class, 'baru']);
    Route::get('pesanan/dikonfirmasi', [OrderController::class, 'dikonfirmasi']);
    Route::get('pesanan/dikemas', [OrderController::class, 'dikemas']);
    Route::get('pesanan/dikirim', [OrderController::class, 'dikirim']);
    Route::get('pesanan/diterima', [OrderController::class, 'diterima']);
    Route::get('pesanan/selesai', [OrderController::class, 'selesai']);

    Route::post('pesanan/ubah_status/{order}', [OrderController::class, 'ubah_status']);

    Route::get('reports', [ReportController::class, 'get_reports']);
   
});
