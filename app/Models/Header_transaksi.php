<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Header_transaksi extends Model
{
    use HasFactory;

    protected $table = "header_transaksi";
    protected $primaryKey = "id_header_transaksi";

    protected $fillable = [
    'tanggal_transaksi'
    ];

    public function detail_transaksi () {
        return $this->hasMany(Detail_transaksi::class, "id_header_transaksi");
    }

    static function detail_tanggal($id_header_transaksi){
        $data = Header_transaksi::where("id_header_transaksi",$id_header_transaksi)->first();

        return $data;
   }


    static function tambah_header_transaksi(){
       $data = Header_transaksi::create([
            "tanggal_transaksi" => date("Y-m-d"),
        ]);

        return $data->id_header_transaksi;
    }
}
