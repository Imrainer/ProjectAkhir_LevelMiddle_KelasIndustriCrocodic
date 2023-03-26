<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $table = "discount";
    protected $primaryKey = 'id_discount';
    


    protected $fillable = [
        'name_discount',
        'code_discount',
        'value_discount',
        'start_date',
        'end_date',
    ];


    public function product(){
        return $this->hasMany(Product::class, "id_product");
     }



}
