<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Api;
use App\Models\Product;
use App\Models\Discount;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class productControllers extends Controller
{
    
//DISPLAY PRODUCT ALL
public function index ()
{
    $data = Product::all();
    $category = Category::all();
    
    return view('admin/shoppingpage',compact('data', 'category'));


}

//DISPLAY PRODUCT BY ID
public function product ($id_product){
        $data=Product::find($id_product);
       
        return view('pages/product',compact('data',));
    }

public function create ()
{   $category = Category::all();
    $discount = Discount::all();
    return view('/admin/add_product',['category'=>$category],['discount'=>$discount]);
}


public function store(Request $request)
{
    
    $validator = $request->validate([
        'name_product'=>'required|max:255',
        'description_product' => 'required',
        'image_product' => 'image|file',
        'id_category' => 'required',
        
        'stock_product' => 'required',
        'price_product' => 'required',
        
    ]);

   
 if($request->file('image_product')) {
  $validator['image_product'] =  $request->file('image_product')->store('product-images');
    }

       
    Product::create($validator);
    return redirect('/admin/shoppingpage');

}


//<---UPDATE---->

function update($id_product){
    $data=Product::find($id_product);
    $category = Category::all();
    $discount = Discount::all();
    return view ('/admin/edit_product',compact(['data','discount']),['category'=>$category]);
}

function updatestore($id_product, Request $request){
   $data=Product::find($id_product);  
   
   $validator = $request->validate([
        // 'name_product'=>'required|max:255',
        // 'description_product' => 'required',
        'image_product' => 'image|file',
        // 'category_product' => 'required',
        // 'stock_product' => 'required',
        // 'price_product' => 'required'
    ]);

   
 if($request->file('image_product')) {
  $validator['image_product'] =  $request->file('image_product')->store('product-images');
    }

    $data->update($request->except(['_token','submit']));
    return redirect('/admin/shoppingpage');
}


///<----DELETE--->
function delete($id_product){
    $data=Product::find($id_product);
    Product::delete( 'id_product',$id_product)->first();
    return redirect('/admin/shoppingpage');

}



static function detail_produk($id_product){
    $data= Product::where("id",$id_product)->first();

    return $data;
}


}
