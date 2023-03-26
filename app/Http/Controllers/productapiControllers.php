<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helpers\Api;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;

class productapiControllers extends Controller
{
    

public function index ()
{
    $data = Product::all();

    if($data){
        return Api::createApi(200, 'success', $data);
    } else {
        return Api::createApi(400, 'failed');
    }

    // return view('admin/shoppingpage',['data'=>$data]);
}



public function create ()
{
    return view('/admin/add_product');
}


public function store(Request $request)
{

    $validator = Validator::make($request->all(),[
        'name'=>'required|max:255',
        'description' => 'required',
        'image' => 'image|max:1024',
        'category' => 'required',
        'stock' => 'required',
        'price' => 'required'
    ]);

    if($request->file('image')) {
  $request->file('image')->store('product-images');
    }

    if($validator->fails()) {
        return redirect ('api/admin/shoppingpage/add')
        ->withErrors($validator)
        ->withInput();
   }

    // $data = [
    //      'name'=>$request->name,
    //      'description'=>$request->description,
    //      'image'=>$request->image,
    //      'category'=>$request->category,
    //      'stock'=>$request->stock,
    //      'price'=>$request->price
    // ]; 
       
    Product::create($validator);
    // Storage::disk('local')->put('images','Contents');
     return response()->json($validator);
    // return redirect('/api/admin/shoppingpage');

}


//<---UPDATE---->

function update($id_product){
    $data=Product::find($id_product);
    // return view ('/admin/edit_product',compact(['data']));
    return Api::createApi(200, 'success', $data);
}

function updatestore($id_product, Request $request){
    $data=Product::find($id_product);
    $data->update($request->except(['_token','submit']));
    return Api::createApi(200, 'success', $data);
}

function delete($id_product){
    $data=Product::find($id_product);
    Product::delete($id_product);
    return redirect('/api/admin/shoppingpage');

}


}
