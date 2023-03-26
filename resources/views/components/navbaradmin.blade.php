<nav class="navbar navbar-dark navbar-expand-lg bg-warning">
    <div class="container-fluid">
      <a class="navbar-brand" href="/admin/homepage">ONLINEMART</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav col-md-10">
          <li class="nav-item">
            <a class="nav-link {{($title === "Home") ? 'active' : ''}}" aria-current="page" href="/admin/homepage">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Shopping") ? 'active' : ''}}" href="/admin/shoppingpage">Shopping</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Member") ? 'active' : ''}}" href="/admin/memberpage">Member</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Discount") ? 'active' : ''}}" href="/admin/discount">Discount</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{($title === "Recap") ? 'active' : ''}}" href="/admin/recappage">Recap</a>
          </li>
        </ul> 
        
        <a href="/logout" class="btn btn-light text-warning float-right">Logout</a>

      </div>
    </div>
  </nav>


  {{$slot}}