<?php

use App\Http\Controllers\BulkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
| testando funcao rota 1.20 segundo video
*/

/// rota volumes

Route::get('bulks',[BulkController::class,'index']);
Route::get('bulks/{slug}',[BulkController::class,'show']);
Route::post('bulks',[BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

/// rota de categorias

Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'update']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

// CRIA ROTA PRODUTOS, COMO FAZ?

Route::get('products',[ProductController::class,'index']);
Route::get('productss/{id}',[ProductController::class,'show']);
Route::post('products',[ProductController::class,'store']);
Route::put('products/{id}',[ProductController::class,'update']);
Route::delete('products/{id}',[ProductController::class,'delete']);