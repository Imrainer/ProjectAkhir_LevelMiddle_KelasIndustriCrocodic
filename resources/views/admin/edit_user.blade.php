<x-layout title="edit_user">
<div class="container">
    <form action="/update/store/{{$user->id}}" method="POST">
        @csrf
        Name
        <input type="text" class="form-control" name="name" value="{{$user->name}}">
        Email
        <input type="text"  class="form-control"  name="email" value="{{$user->email}}">
        Member
        <input type="number"  class="form-control" name="member" value="{{$user->member}}">
        
    
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      <button type="submit" class="btn btn-primary">Save changes</button>
    </form>
</div>

</x-layout>