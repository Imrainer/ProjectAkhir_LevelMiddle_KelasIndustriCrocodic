<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Header_transaksi;
use App\Models\Detail_transaksi;
use App\Helpers\Api;
use Illuminate\Support\Facades\Storage;

class PurchaseControllerApi extends Controller
{
    public function product ($id)
    {
        $product= Product::list_product();
        if($product){
            return Api::createApi(200, 'success', $product);
        } else {
            return Api::createApi(400, 'failed');
        }
    }
    
    function add_cart($id_product,request $request ){
        $cart = session("cart");

        $product = Product::detail_product($id_product);
        
        $cart[$id_product] = [
            "id_product" => $product->id_product,
            "name_product" => $product->name_product,
            "description_product" => $product->description_product,
            "id_discount" => $product->discount->value_discount,
            "image_product" => $product->image_product,
            "stock_product" => $product->stock_product,
            "price_product" => $product->price_product,
            "jumlah" =>  $request->jumlah,
        ];

        session(["cart" => $cart]);
        
        return Api::createApi(200, 'success',$cart);
    }


    function cart () {
        $cart = session("cart");
        return Api::createApi(200, 'success',$cart);

    }

    function delete_cart($id_product){
        $cart = session("cart");
        unset($cart[$id_product]);
        session(["cart" =>$cart]);

        return Api::createApi(200, 'success',$cart);
    }

    function cetak_nota() {
        $cart = session("cart");
        $pdf = Pdf::loadView('pages/pdf_nota', compact('cart'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->stream('nota.pdf');
    }
    
    function add_transaksi(){
            $cart = session("cart");
            $id_header_transaksi = Header_transaksi::tambah_header_transaksi();
            foreach($cart as $ct => $val){
          
                $id_product= $val["id_product"];
                $jumlah = $val["stock_product"]-$val["jumlah"];
                    Detail_transaksi:: tambah_detail_transaksi($id_product,$id_header_transaksi,$jumlah);
            }

            $product = Product::latest()->first();
            $product->stock_product - $val["jumlah"];
            $product->save();

            $user = User::latest()->first();
            $user->id_point = + 5 ;
            $user->save();


            session()->forget("cart");

             return Api::createApi(200, 'success',$cart);
    }

}
