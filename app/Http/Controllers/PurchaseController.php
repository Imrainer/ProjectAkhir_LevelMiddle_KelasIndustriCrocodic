<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Discount;
use App\Models\Detail_transaksi;
use App\Models\Header_transaksi;
use App\Models\User;
use App\Models\Point;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;


class PurchaseController extends Controller
{
    public function product ($id)
    {
        $product= Product::list_product();
        return view('pages/product',['product'=>$product]);

        $session()->forget("cart");
    }
    
    function add_cart($id_product,request $request ){
        $cart = session("cart");

        $product = Product::detail_product($id_product);
        // $header_transaksi = Header_transaksi::detail_tanggal($id_header_transaksi);
        
        $cart[$id_product] = [
            "id_product" => $product->id_product,
            "id_discount" => $product->discount->value_discount,
            "name_product" => $product->name_product,
            "description_product" => $product->description_product,
            "image_product" => $product->image_product,  
            "price_product" => $product->price_product,
            "jumlah" =>  $request->jumlah,  
            "stock_product" => $product->stock_product-1 ,
            
            // "tanggal_transaksi"=>$header_transaksi->tanggal_transaksi,
        ];

        session(compact('cart'));
        
        return redirect('/keranjang');
    }


    function cart () {
        $cart = session("cart");
        return view("/pages/cart")->with("cart", $cart);
    }

    function cetak_nota() {
        $cart = session("cart");
        $pdf = Pdf::loadView('pages/pdf_nota', compact('cart'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('nota.pdf');
    }

    function delete_cart($id_product){
        $cart = session("cart");
        unset($cart[$id_product]);
        session(["cart" =>$cart]);

        return redirect('/keranjang');
    }


    function add_transaksi(request $request, ){
            $cart = session("cart");
            $id_header_transaksi = Header_transaksi::tambah_header_transaksi();

            foreach($cart as $ct => $val){
             
            $id_product = $val["id_product"];
            $jumlah = $val["jumlah"];
          
            
           $pembayaran = $request->pembayaran;
            
            if($pembayaran<$val["price_product"]){
                    return redirect('/keranjang')->WithErrors('Maaf Uang anda tidak mencukupi');
                };


             Detail_transaksi:: tambah_detail_transaksi($id_product,$id_header_transaksi,$jumlah,$pembayaran);
            }

            $product = Product::latest()->first();
            $product->stock_product - $val["jumlah"];
            $product->save();

            $user = User::latest()->first();
            $user->id_point = + 5 ;
            $user->save();
          
            // $points = floor($request->total / 10000);
            // $user = Auth::user()->member == 1;
            // $user->point('points')->create([
            // 'points' => $points,
            
            // ]);


            session()->forget("cart");

            return redirect("/keranjang"); 
    }

}
