<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Discount;
class DiscountControllers extends Controller
{

    public function index () {
        return view ('admin/discount');
    }



    public function store(request $request)
    {
     $discount = Discount::latest()->first();
    
    //  $code_discount = (int) $discount->code_discount +1 ?? 1;
 
     $discount = new Discount (); 
     $discount->name_discount = $request->name_discount;
     $discount->code_discount = $request->code_discount; 
     $discount->value_discount = $request->value_discount;
     $discount->start_date = $request->start_date;
     $discount->end_date = $request->end_date;
     $discount->save();
    
     return redirect('/admin/discount')->with('discount baru berhasil ditambahkan');
    }
}
