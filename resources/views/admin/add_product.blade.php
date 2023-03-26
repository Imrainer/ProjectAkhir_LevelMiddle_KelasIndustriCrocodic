<x-layout title="Add | Product">

    

    <div class="container col-md-6 shadow-lg">
        <h3 class="text-warning"> Add Product </h3>

        @if($errors->any())
        <ul>
          @foreach($errors->all() as $msg)
          <li class="text-danger">{{$msg}}</li>
          @endforeach
      </ul>   
      @endif
    <form action="/admin/shoppingpage/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name_product" id="name">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea type="text" name="description_product" class="form-control" id="description" > </textarea>
            
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" name="image_product" class="form-control" id="image" >
        
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputtext1" class="form-label">Category</label>
            <input type="text" class="form-control" name="id_category" id="category" >
        
          </div> --}}

          <div class="form-group"> 
            <label>Category</label>
            <select class="form-control" name="id_category">
         
              <option value=""> Pilih </option>
              @foreach ( $category as $category)
              <option value="{{$category->id_category}}"> {{$category->category_category}} </option>
              @endforeach
            </select>
          </div>

<div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Discount</label>
            <select class="form-control" name="id_discount">
         
              <option value=""> Pilih </option>
              @foreach ( $discount as $discount)
              <option value="{{$discount->id_discount}}"> {{$discount->name_discount}} </option>
              @endforeach
            </select>
        
          </div>
      

          <div class="mb-3">
            <label for="exampleInputstock1" class="form-label">Stock</label>
            <input type="number" name="stock_product" class="form-control col-md-2" id="stock" >
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" name="price_product" class="form-control" id="price" >
          </div>

          
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-warning ">Submit</button></div>
      </form>
</div>
</x-layout>