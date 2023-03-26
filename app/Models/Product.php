<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    // use \Staudenmeir\EloquentHasManyDeep\HasRelationship;
    protected $table = "products"; 
    protected $primaryKey = 'id_product';

    protected $fillable = [
        'name_product',
        'description_product',
        'image_product',
        'id_category',
        'id_discount',
        'stock_product',
        'price_product'
    ];


    public function category () {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function discount () {
        return $this->belongsTo(Discount::class, 'id_discount');
    }

    static function detail_product($id_product){
         $data = Product::where("id_product",$id_product)->first();

         return $data;
    }
    public function detail_transaksi(){
        return $this->hasMany(Detail_transaksi::class, "id_product");
     }



}
