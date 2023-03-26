<nav class="navbar navbar-dark navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="/landingpage">ONLINEMART</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-md-10">
          <li class="nav-item">
            <a class="nav-link {{($title === "Home") ? 'active' : ''}}" aria-current="page" href="/homepage">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Shopping") ? 'active' : ''}}" href="/shoppingpage">Shopping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Cart") ? 'active' : ''}}" href="/keranjang">Cart</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Membership") ? 'active' : ''}}" href="/membership">Membership</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{($title === "Recap") ? 'active' : ''}}" href="/admin/recappage">Recap</a>
          </li> --}}
        </ul> 
        <a href="/logout" class="btn btn-light text-warning float-right">Logout</a>
      </div>
    </div>
  </nav>


  {{$slot}}