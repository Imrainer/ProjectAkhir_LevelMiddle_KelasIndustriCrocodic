<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_transaksi;
use App\Models\Product;
use App\Models\Header_transaksi;
use Barryvdh\DomPDF\Facade\Pdf;

class RecapControllers extends Controller
{
    public function index () {
    $recap = Detail_transaksi::all();
    $product = Product::all();
    $header = Header_transaksi::all();
    return view ('/admin/recappage', ['recap'=>$recap],compact(['header']),compact(['product']));
    }

    function cetak() {
        $recap = Detail_transaksi::all();
        $product = Product::all();
        $header = Header_transaksi::all();
        $pdf = Pdf::loadView('pages/pdf_recap', compact('header','product','recap'))->setOptions(['defaultFont' => 'sans-serif']);
        return $pdf->download('recap.pdf');
    }



}
