<x-layout title="login | lks">


    <div class="container col-md-5 shadow-lg">
        <h1 class="text-center mt-2"> LOGIN </h1>
    <form>
        
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <div class=" d-flex justify-content-center mb-5">
        <button type="submit" class="btn btn-dark mb-5">Submit</button>
    </div>
      </form>
</div>
</x-layout>