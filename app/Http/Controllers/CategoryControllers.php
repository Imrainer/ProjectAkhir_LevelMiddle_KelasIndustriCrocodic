<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryControllers extends Controller
{
    public function store(Request $request)
{
    $category = new Category();
    $category->category_category = $request->category_category;
    $category->save();

    return redirect('/admin/shoppingpage')->with('Kategori baru berhasil ditambahkan');

}
}
