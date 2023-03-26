<x-layout title="Login | Page">
     
    <div class="container card px-3 pt-3 shadow-lg" style="max-width: 50rem">
    <div class="row col-md-12">
        <div class="panel panel-primary">
            <div class="panel-heading text-center">
                <h1 class="text-center text-warning">LOGIN</h1>
            </div>

            <ul>
                @foreach($errors->all() as $msg)
                <li class="text-danger">{{$msg}}</li>
                @endforeach
            </ul>    

            <div class="panel-body">  
<form action="/login/store" class="mt-5" method="POST">
    @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Email address</label>
          <input type="email" class="form-control"  value="{{Session::get('email')}}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
          <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Password</label>
          <input type="password"  value="{{Session::get('password')}}" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <div class="d-flex justify-content-center">
        <button type="submit" class="btn btn-warning text-light mb-3 mt-3">Submit</button>
        </div>
        
      </form>
      <a href="/register" class="mt-5 text-decoration-none mb-5" >Doesn't have Account? Click here</a>
    </div>
        </div>
    </div>
    </div>
    
</x-layout>