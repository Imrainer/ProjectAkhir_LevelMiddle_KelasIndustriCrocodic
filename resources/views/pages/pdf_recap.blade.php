<x-layout title="Cetak Recap">

<div class="container">

<table class="table mt-3">
        <thead>
          <tr>
            <th scope="col">No</th> 
            <th scope="col"> Tanggal transaksi</th>
            <th scope="col">Product</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Pembayaran</th>
           
           
           
          </tr>
        </thead>
        <tbody>
            @foreach($recap as $item)
         
          <tr>
            <th scope="row">{{$item->id_detail_transaksi}}</th> 
            <td>{{$item->header_transaksi->tanggal_transaksi}}</td> 
            <td>{{$item->product->name_product}}</td>  
            <td>{{$item->jumlah}}</td>
            <td>Rp.{{$item->pembayaran}}</td>
           
          </tr>
  
      @endforeach
        </tbody>
      </table>



</div>



</x-layout>