<x-layout title="{{$data->name_product}} | Product">

<x-navbar title="Shopping">

<div class="container d-flex">
    <div class="mt-5 col-md-7">
 
        @if ($data->image_product)
        <img src="{{ asset ('storage/' . $data->image_product) }}"  class="mx-3 " width="400px" alt="Gambar Produk ">
       @else

       <img src="https://source.unsplash.com/1200x400?{{$data->category->name_product}}"  class="mx-3"  width="400px"alt="Gambar Produk " >
      
     @endif
</div>
<div class="mt-5">
<a href="" class="text-decoration-none text-dark fw-bold">{{$data->category->category_category}}</a>
<h1 class="">{{$data->name_product}}</h1>
<p class="mt-1">{{$data->description_product}}</p>
<h3 class="mt-4 fw-bold">Rp. {{$data->price_product}} </h3>

@if (empty($data->discount->value_discount) )

@else
<h3 class="mt-4 text-success fw-bold">Discount Rp. {{$data->discount->value_discount}} </h3>
@endif

<h4 class="mt-4 fw-bold">Stock: {{$data->stock_product}} </h4>
<form action="/cart/addcart/{{$data->id_product}}">
@if ($data->stock_product >'0')
  Jumlah
  <input type="number" name="jumlah" class="col-md-2 form-control"> 
  <button class="btn btn-outline-warning col-md-12 mt-3" >ADD TO CART</button> </a>
@else 
<button class="btn btn-outline-danger col-md-12 mt-3"disabled>SOLD OUT</button> 
@endif
</div>
</div>


</x-navbaradmin>

</x-layout>