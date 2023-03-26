<x-layout title="Shopping">

    <x-navbar title="Shopping">

       
      <div class="container">


        <div class="dropdown mt-3">
          <button class="btn btn-secondary-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        Category
          </button>
         
          <ul class="dropdown-menu"> 
            @foreach ($category as $category)
            <li><a class="dropdown-item" href="#">{{$category->category_category}}</a></li>
              @endforeach 
          </ul>
      
        </div>
      
          
        <div class="col-md-12 mt-5 row ">
 
          <div class="card-group d-flex ">
       @foreach ($data as $item)
          <div class="card mx-3 shadow-lg">
            @if ($item->image_product)
               <img src="{{ asset ('storage/' . $item->image_product) }}"  class="mx-3 image-fluid "  alt="Gambar Produk ">
              @else
  
              {{-- <img src="https://source.unsplash.com/1200x400?{{$item->category->name_product}}"  class="mx-3"  width="400px"alt="Gambar Produk " > --}}
             
            @endif
  
              <div class="card-body ">
                <a href="" class="text-decoration-none text-dark fw-bold">{{$item->category->category_category}}</a>
                <h5 class="card-title">{{$item->name_product}}</h5>
                {{-- <p class="card-text">{{$item->description_product}}</p> --}}
                <h5>Rp.{{$item->price_product}}</h5>
                <a href="/product/{{$item->id_product}}" class="btn btn-outline-warning">Open</a><br>
                {{-- <a class="fas fa-cart-plus btn text-warning mt-3" type="button" href="/cart/addcart/{{$item->id_product}}"></a> --}}
              </div>
              </div>
          @endforeach
    </div>
            </div>
        </div>
    </x-navbar>

</x-layout>