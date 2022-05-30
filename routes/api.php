<?php

use App\Http\Controllers\BulkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Alternative_UnitController;
use App\Http\Controllers\Stock_LocationController;
use App\Http\Controllers\Order_ItenController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Type_PaymentController;
use App\Http\Controllers\User_Has_CustomerController;
use App\Http\Controllers\StockController;

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
// parametro, pq ?


Route::get('bulks',[BulkController::class,'index']);
Route::get('bulks/{slug}',[BulkController::class,'show']);
Route::post('bulks',[BulkController::class,'store']);
Route::put('bulks/{slug}',[BulkController::class,'update']);
Route::delete('bulks/{slug}',[BulkController::class,'delete']);

/// rota de categorias
// parametro ID necessario para rota?

Route::get('categories',[CategoryController::class,'index']);
Route::get('categories/{id}',[CategoryController::class,'show']);
Route::post('categories',[CategoryController::class,'store']);
Route::put('categories/{id}',[CategoryController::class,'update']);
Route::delete('categories/{id}',[CategoryController::class,'delete']);

// CRIA ROTA PRODUTOS, COMO FAZ?

Route::get('products',[ProductController::class,'index']);
Route::get('products/{id}',[ProductController::class,'show']);
Route::post('products',[ProductController::class,'store']);
Route::put('products/{id}',[ProductController::class,'update']);
Route::delete('products/{id}',[ProductController::class,'delete']);

// ROTA CUSTOMERS

Route::get('customers',[CustomerController::class,'index']);
Route::get('customers/{id}',[CustomerController::class,'show']);
Route::post('customers',[CustomerController::class,'store']);
Route::put('customers/{id}',[CustomerController::class,'update']);
Route::delete('customers/{id}',[CustomerController::class,'delete']);

// ROTA UNIDADE ALTERNATIVAS, não possui chave primaria?

Route::get('alternatives_units',[Alternative_UnitController::class,'index']);
Route::get('alternatives_units/{}',[Alternative_UnitController::class,'show']);
Route::post('alternatives_units',[Alternative_UnitController::class,'store']);
Route::put('alternatives_units/{}',[Alternative_UnitController::class,'update']);
Route::delete('alternatives_units/{}',[Alternative_UnitController::class,'delete']);

// rota stock locations

Route::get('stocks_locations',[Stock_LocationController::class,'index']);
Route::get('stocks_locations/{id}',[Stock_LocationController::class,'show']);
Route::post('stocks_locations',[Stock_LocationController::class,'store']);
Route::put('stocks_locations/{id}',[Stock_LocationController::class,'update']);
Route::delete('stocks_locations/{id}',[Stock_LocationController::class,'delete']);

// rota stocks - não possui chave primaria, como faz?

Route::get('stocks',[StockController::class,'index']);
Route::get('stocks/{}',[StockController::class,'show']);// naõ possui chave prim
Route::post('stocks',[StockController::class,'store']);
Route::put('stocks/{}',[StockController::class,'update']);
Route::delete('stocks/{}',[StockController::class,'delete']);


// rota orders itens

Route::get('orders_itens',[Order_ItenController::class,'index']);
Route::get('orders_itens/{seq}',[Order_ItenController::class,'show']);
Route::post('orders_itens',[Order_ItenController::class,'store']);
Route::put('orders_itens/{seq}',[Order_ItenController::class,'update']);
Route::delete('orders_itens/{seq}',[Order_ItenController::class,'delete']);

// rota orders

Route::get('orders',[OrderController::class,'index']);
Route::get('orders/{id}',[OrderController::class,'show']);
Route::post('orders',[OrderController::class,'store']);
Route::put('orders/{id}',[OrderController::class,'update']);
Route::delete('orders/{id}',[OrderController::class,'delete']);

// rota user

Route::get('users',[UserController::class,'index']);
Route::get('users/{id}',[UserController::class,'show']);
Route::post('users',[UserController::class,'store']);
Route::put('users/{id}',[UserController::class,'update']);
Route::delete('users/{id}',[UserController::class,'delete']);

// rota Type Payment

Route::get('type_payments',[Type_PaymentController::class,'index']);
Route::get('type_payments/{id}',[Type_PaymentController::class,'show']);
Route::post('type_payments',[Type_PaymentController::class,'store']);
Route::put('type_payments/{id}',[Type_PaymentController::class,'update']);
Route::delete('type_payments/{id}',[Type_PaymentController::class,'delete']);

// user has Customer rota, possui somente chave estrangeira


Route::get('user_has_customers',[User_Has_CustomerController::class,'index']);
Route::get('user_has_customers/{}',[User_Has_CustomerController::class,'show']);// naõ possui chave prim
Route::post('user_has_customers',[User_Has_CustomerController::class,'store']);
Route::put('user_has_customers/{}',[User_Has_CustomerController::class,'update']);
Route::delete('User_Has_Customers/{}',[User_Has_CustomerController::class,'delete']);


