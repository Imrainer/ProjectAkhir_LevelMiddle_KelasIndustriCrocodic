<x-layout title="Member">

<x-navbaradmin title="Member">

    <div class="container mt-5">

      

        {{-- <button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
          + Add New Member
          </button> --}}
          
          <!-- Modal -->
          
          <!---Update-->
        
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col">Member</th>
            <th scope="col">Point</th>
            
          </tr>
        </thead>
        <tbody> @foreach ($user as $item)
          <tr>
            <th scope="row">{{$item->id}}</th>
            {{-- <td>{{$item->kode_member}}</td> --}}
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>
              @if ($item->member == 0)
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
               
              </div>
            

              @else 
              <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault"checked>
               
              </div>
            @endif
          
            </td>
            <td>{{$item->id_point}}</td>
           
          </tr>   

          {{-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Edit New Member</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/update/store/{{$item->id}}" method="POST">
                    @csrf
                    Name
                    <input type="text" class="form-control" name="name" value="{{$item->name}}">
                    Email
                    <input type="text"  class="form-control"  name="email" value="{{$item->email}}">
                    Member
                    <input type="number"  class="form-control" name="member" value="{{$item->member}}">
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
              </div>
            </div>
          </div> --}}

          @endforeach
        </tbody>
      </table>
</div>


</x-navbaradmin>


</x-layout>