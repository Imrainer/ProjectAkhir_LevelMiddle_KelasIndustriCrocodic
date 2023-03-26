<x-layout title="pdf nota pembelian">

    @if(empty($cart) || count($cart) ==0)
    <div class="container mt-5"><h1 class="mt-5 pt-5 text-center text-warning">Tidak ada produk di Cart</h1></div> 
    @else

    <h1 class=""style="text-align:center"> ONLINEMART </h1>
    <div class="container mt-5 ">
        {{-- <h3 class="text-center"> Tanggal: {{$val["tanggal_transaksi"]}}</h3> --}}
        <table cellpadding="30" >
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
      
    
    
        @foreach($cart as $ct => $val)
        <?php
            $subtotal= $val["price_product"] * $val["jumlah"] - $val["id_discount"];
        ?>
            <tr>
                <td>{{$no++}}</td>
                <td>{{$val["name_product"]}}</td>
                <td>{{$val["price_product"]}}</td>
                <td>{{$val["jumlah"]}} pcs</td>
                <td>{{$val["id_discount"]}}</td>
                <td>{{$subtotal}}</td>
              
        </tr>
        <?php
        $grandtotal+= $subtotal;
        ?>
        @endforeach
        <tr><th colspan="4">Grand Total</th>
            <th>{{$grandtotal}}</th>
             </tr> 
        <tr> <th colspan="4"> Pembayaran: </th> 
            <th></th>
        </tr>
        
            <th> &nbsp;</th>
      
      </table>
      @endif

</x-layout>