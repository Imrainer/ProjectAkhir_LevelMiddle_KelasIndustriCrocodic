<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productapiControllers;
use App\Http\Controllers\PurchaseControllerApi;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin/shoppingpage',[productapiControllers::class,'index']);
Route::get('/admin/shoppingpage/add',[productapiControllers::class,'create']);
Route::post('/admin/shoppingpage/store',[productapiControllers::class,'store']);
Route::get('/admin/shoppingpage/edit/{id}',[productapiControllers::class,'update']);
Route::match(['put', 'patch'],'/admin/shoppingpage/edit-store/{id}',[productapiControllers::class,'updatestore']);
Route::delete('/admin/product/delete/{id_product}',[productControllers::class,'delete']);

 //CART
       
 Route::get('/keranjang/addcart/{id}', [ PurchaseControllerApi::class,'add_cart'])->where("id_product","[0-9]+");
 Route::get('/keranjang',[PurchaseControllerApi::class, 'cart']);
 Route::get('/keranjang/cancel/{id}', [ PurchaseControllerApi::class,'delete_cart'])->where("id_product","[0-9]+");

 //TRANSACTION 

 Route::get('/transaksi/add', [PurchaseControllerApi::class, 'add_transaksi']); 

 Route::get('/cetak', [PurchaseControllerApi::class, 'cetak_nota']); 
