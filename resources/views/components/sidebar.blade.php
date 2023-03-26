<x-layout title="">

<style>

.sidebar {
    width: 200px;
    height: 800px;
    
}
</style>

<div class="header bg-warning">
<div class="sidebar bg-warning">


            <div class="mt-5 ms-4 text-light">
            <a class="nav-link mb-3 {{($title === "Dashboard") ? 'active' : ''}}" aria-current="page" href="/homepage"><h6>Dashboard</h6></a>
            <a class="nav-link mb-3 {{($title === "Shopping") ? 'active' : ''}}" href="/shoppingpage"><h6>Shopping</h6></a>
            <a class="nav-link mb-3 {{($title === "Cart") ? 'active' : ''}}" href="/keranjang"><h6>Cart</h6></a>
            <a class="nav-link mb-3 {{($title === "Get Membership") ? 'active' : ''}}" href="/keranjang"><h6>Get Membership</h6></a>
            </div>
        </div>
     
      </div>
</div>


</x-layout>