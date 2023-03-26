<x-layout title="Shopping">

    <x-navbaradmin title="Shopping">
    
        <div class="container">
    <a href="/admin/shoppingpage/add" class="btn btn-outline-success mt-5 ms-2 ">+Add New</a>

    <div class="dropdown mt-3">
      <button class="btn btn-secondary-info dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    Category
      </button>
     
      <ul class="dropdown-menu"> 
        @foreach ($category as $category)
        <li><a class="dropdown-item" href="#">{{$category->category_category}}</a></li>
          @endforeach 
          <li> <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#exampleModal"> + Add New Category</button>
             </li>  
      </ul>
  
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Category</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          
            <form action="/admin/shoppingpage/category/store" method="post">
              @csrf
Category:
<input type="text" name="category_category" class="form-control">
           

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary">Save</button> </form>
          </div>
        </div>
      </div>
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

            <div class="card-body">
              <a href="" class="text-decoration-none text-dark fw-bold">{{$item->category->category_category}}</a>
              <h5 class="card-title">{{$item->name_product}}</h5>
              {{-- <p class="card-text">{{$item->description_product}}</p> --}}
              <h5>Rp.{{$item->price_product}}</h5>
              <a href="/product/{{$item->id_product}}" class="btn btn-outline-warning">Open</a><br>
              <a href="/admin/shoppingpage/edit/{{$item->id_product}}" class="btn btn-outline-primary mt-2">Edit</a><br>
              <a href="/admin/shoppingpage/delete/{{$item->id_product}}" class="btn btn-outline-danger mt-2">Delete</a>
            </div>
          </div> 
          
      @endforeach  
</div>
      </div>
    </div>
    </x-navbaradmin>

</x-layout>

