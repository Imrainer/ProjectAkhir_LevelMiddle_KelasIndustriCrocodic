<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_transaksi extends Model
{
    use HasFactory;

    protected $table = "detail_transaksi";
    protected $primaryKey = "id_detail_transaksi";

    protected $fillable = [
        'id_header_transaksi','id_product','jumlah', 'pembayaran'
    ];

   public function header_transaksi(){
    return $this->belongsTo(Header_transaksi::class, "id_header_transaksi");
   }

   public function product(){
    return $this->belongsTo(Product::class, "id_product");
   }

    static function tambah_detail_transaksi($id_product,$id_header_transaksi,$jumlah,$pembayaran){
        Detail_transaksi::create([
            "id_product" => $id_product,
            "id_header_transaksi"=>$id_header_transaksi,
            "jumlah"=>$jumlah,
            "pembayaran"=>$pembayaran,
        ]);
    }
}
