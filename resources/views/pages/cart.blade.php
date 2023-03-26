<x-layout title="Cart">
<x-navbaradmin title="Cart">

@if(empty($cart) || count($cart) ==0)

<div class="container mt-5"><h1 class="mt-5 pt-5 text-center text-warning">Tidak ada produk di Cart</h1></div> 
@else
<div class="container mt-5 ">
    <table cellpadding="10" >
        <tr>
                <th>No.</th>
                <th>Nama Produk</th>
                <th> Harga </th>
                <th> Jumlah </th>
                <th> Diskon </th>
                <th> Sub Total </th>
                <th>&nbsp;</th>
        </tr>
        <?php
            $no=1;
            $grandtotal=0;
        ?>
  
    <a href="/cetak" class="btn btn-primary">Cetak Nota Pembelian</a>

    @foreach($cart as $ct => $val)
 
    <?php
        $subtotal= $val["price_product"] * $val["jumlah"]-$val["id_discount"];
    ?>
        <tr>   
            <td>{{$no++}}</td>
            <td>{{$val["name_product"]}}</td>
            <td>{{$val["price_product"]}}</td>
            <td>{{$val["jumlah"]}} pcs</td>
            <td>{{$val["id_discount"]}}</td>
            <td>{{$subtotal}}</td>
            <td>
                <a href="/cart/cancel/{{$ct}}" class="text-decoration-none text-dark fw-bold">Cancel</a>
            </td>
    </tr>
    <?php
    $grandtotal+= $subtotal;
    ?>
    @endforeach
    <tr>
        <th colspan="4">Grand Total</th>
        <th>{{$grandtotal}}</th>
        <th> &nbsp;</th>
    </tr>
  </table>
<div class="mt-3">

    <form action="/transaksi/add">
        Pembayaran
<input name="pembayaran" type="integer" class="form-control col-md-4">

    @foreach($errors->all() as $msg)
    <li class="text-danger">{{$msg}}</li>
    @endforeach
 
<button type="submit" class="btn btn-outline-warning">PURCHASE</button></div>

</div>
@endif

</x-navbaradmin>
</x-layout>