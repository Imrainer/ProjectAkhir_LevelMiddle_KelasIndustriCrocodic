<x-layout title="Edit | Member">


   {{-- <!---UPDATE-->
          <div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel"> Edit Member</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/admin/memberpage/update/{{$data->$id_member}}" method="POST">
                    @csrf
                    Name
                    <input type="text" class="form-control" name="name" value={{$data->name}}>
                    Alamat
                    <input type="text"  class="form-control"  name="alamat"value={{$data->alamat}} >
                    Number
                    <input type="number"  class="form-control" name="telepon" value={{$data->telepon}}>
                    
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Save changes</button>
                </form>
                </div>
              </div>
            </div>
          </div> --}}


</x-layout>