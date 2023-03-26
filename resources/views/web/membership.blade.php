<x-layout title="membership">

<x-navbar title="Membership">

@foreach ($user as $item)
    
@endforeach

@if ($item->member == 1)

<div class="container mt-5">
<h2 class="text-warning text-center"> You Are Already Joined Membership </h2>
</div>
@else
<div class="container mt-5">
    <form action="/membership/join" method="POST">
        @csrf
<h2 class="text-warning text-center mt-5"> Interested to Joining Membership?</h2>
<div class="d-flex justify-content-center mt-3">
<button class="btn btn-outline-warning"> Yes I'm in! </button></div>
    </form>
</div>
@endif


</x-navbar>
</x-layout>