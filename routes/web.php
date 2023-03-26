<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ECommerceControllers;
use App\Http\Controllers\productControllers;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CategoryControllers;
use App\Http\Controllers\ClientControllers;
use App\Http\Controllers\MemberControllers;
use App\Http\Controllers\RecapControllers;
use App\Http\Controllers\DiscountControllers;
use Illuminate\Support\Facades\Auth;
use App\Helpers\helpers;
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


Route::get('/landingpage', function() {
    return view('web/landingpage');
})->middleware('guest');

Route::get('/sidebar', function() {
    return view('components/sidebar',["title" => "sidebar"]);
});



Route::get('/',[ECommerceControllers::class,'login'])->middleware('guest')->name('login');
Route::post('/login/store',[ECommerceControllers::class,'logged']);
Route::get('/logout',[ECommerceControllers::class,'logout']);
Route::get('/register',[ECommerceControllers::class,'create']);
Route::post('/register/store',[ECommerceControllers::class,'createstore']);
Route::get('/update/{id}',[ECommerceControllers::class,'edit']);
Route::post('/update/store/{id}',[ECommerceControllers::class,'editstore']);

Route::middleware(['auth'])->group(function () {
    Route::get('admin/homepage', function() { 
        return view('admin/homepage');});
        Route::get('/admin/shoppingpage',[productControllers::class,'index']);
        Route::get('/admin/shoppingpage/add',[productControllers::class,'create']);
        Route::post('/admin/shoppingpage/store',[productControllers::class,'store']);
        Route::get('/admin/shoppingpage/edit/{id_product}',[productControllers::class,'update']);
        Route::put('/admin/shoppingpage/edit-store/{id_product}',[productControllers::class,'updatestore']);
        Route::delete('/admin/product/delete/{id_products}',[productControllers::class,'delete']);
        Route::post('/admin/shoppingpage/category/store',[CategoryControllers::class,'store']);
        Route::get('/admin/recappage', [RecapControllers::class,'index']);
        
        Route::get('/admin/discount',[DiscountControllers::class,'index']);

        Route::get('/admin/discount-store',[DiscountControllers::class,'store']);

        //MEMBER
        Route::get('/admin/memberpage',[MemberControllers::class,'index']);
        Route::post('/admin/memberpage/store',[MemberControllers::class,'store']);
        Route::post('/admin/memberpage/update/{id_member}',[MemberControllers::class,'update']);
        Route::delete('/admin/memberpage/delete/{id_member}',[MemberControllers::class,'delete']);

       
        //View Product
        Route::get('/product/{id}',[productControllers::class,'product']);
        Route::get('/nota', function() {
            return view('pages/pdf_nota');
        });
        
        Route::get('/recap', function() {
            return view('pages/pdf_recap');
        });
        
        //CART
       
        Route::get('/cart/addcart/{id}', [ PurchaseController::class,'add_cart'])->where("id_product","[0-9]+");
        Route::get('/keranjang',[PurchaseController::class, 'cart']);
        Route::get('/cart/cancel/{id}', [ PurchaseController::class,'delete_cart'])->where("id_product","[0-9]+");

        //TRANSACTION 

        Route::get('/transaksi/add', [PurchaseController::class, 'add_transaksi']); 

        Route::get('/cetak', [PurchaseController::class, 'cetak_nota']); 

        Route::get('/cetakrecap', [RecapControllers::class, 'cetak']); 
    
    });

    Route::middleware(['auth'])->group(function () {
    Route::get('/homepage', function() {
    return view('web/homepage');})->name('home');
    Route::get('/shoppingpage',[ClientControllers::class, "index"])->name('shopping');
    Route::get('/pointpage', function() {
        return view('web/pointpage');})->name('point');
    Route::get('/discountpage', function() {
        return view('web/discountpage');})->name('discount');
    Route::get('/product/{id_products}',[productControllers::class,'product']);
    Route::get('/historypage', function() {
        return view('web/historypage');})->name('history');
    Route::get('/membership',[MemberControllers::class,'join']);
    Route::post('/membership/join',[MemberControllers::class,'joining']);

    });
