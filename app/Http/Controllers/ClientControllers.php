<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Controllers\productControllers;

class ClientControllers extends Controller
{
    public function index (){
    $category = Category::all();
    $data = Product::all();
    return view('/web/shoppingpage',['data'=>$data],['category'=>$category]);
}

   
}
