<x-layout title="Discount">

<x-navbaradmin title="Discount">

    <div class="container col-md-7">
    <form action="/admin/discount-store" class="mt-5">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name_discount">
         
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Code</label>
          <input type="integer" class="form-control" id="exampleInputPassword1" name="code_discount">
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">value</label>
            <input type="integer" class="form-control" id="exampleInputPassword1" name="value_discount">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="start_date">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">End Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="end_date">
          </div>
        
          <div class="d-flex justify-content-center mt-3">
        <button type="submit" class="btn btn-primary">Submit</button></div>
      </form>
</div>

</x-navbaradmin>
</x-layout>