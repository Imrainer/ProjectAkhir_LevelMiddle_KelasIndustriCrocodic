<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

protected $primaryKey = "id_category";

    protected $fillable = [
        "category_category"
    ];

    public function product(){
        return $this->hasMany(Product::class, "id_product");
     }

}
