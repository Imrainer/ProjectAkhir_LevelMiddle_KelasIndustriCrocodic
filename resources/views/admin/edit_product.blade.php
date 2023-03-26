<x-layout title="Edit| Product">

    

    <div class="container col-md-6 shadow-lg">
        <h3 class="text-warning"> Edit Product </h3>
    <ul>
        @foreach($errors->all() as $msg)
        <li class="text-danger">{{$msg}}</li>
        @endforeach
    </ul>    
    <form action="/admin/shoppingpage/edit-store/{{$data->id_product}}"  method="POST" enctype="multipart/form-data">
      {{ csrf_field() }}
      {{ method_field('put') }}
 
      
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" name="name_product" value={{$data->name_product}} id="exampleInputName" aria-describedby="nameHelp">
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Description</label>
            <textarea type="text" name="description_product" class="form-control"  value={{$data->description_product}} ></textarea>
            
            
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Picture</label>
            <input type="file" name="image_product" class="form-control"  value={{$data->picture_product}} id="exampleInputEmail1" >
        
          </div>
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
            <input type="number" name="stock_product" class="form-control col-md-2"  value={{$data->stock_product}} id="exampleInputstock1" >
        
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Price</label>
            <input type="number" name="price_product" class="form-control"  value={{$data->price_product}} id="exampleInputEmail1" >
        
          </div>
      
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-outline-warning">Submit</button></div>
      </form>
</div>
</x-layout>