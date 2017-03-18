<div class="col-sm-3 col-md-2 sidebar">
  <ul class="nav nav-sidebar">
    <li class="{{strpos(Route::currentRouteName(), 'dashboard') !== false ? 'active' : '' }}"><a href="{{ Route('dashboard') }}">Overzicht <span class="sr-only">(current)</span></a></li>
    <li class="{{strpos(Route::currentRouteName(), 'categorys') !== false ? 'active' : '' }}"><a href="{{ Route('categorys') }}">Categorieën</a></li>
    <li class="{{strpos(Route::currentRouteName(), 'products') !== false ? 'active' : '' }}"><a href="{{ Route('products') }}">Producten</a></li>
    <li class="{{strpos(Route::currentRouteName(), 'users') !== false ? 'active' : '' }}"><a href="{{ Route('users') }}">Gebruikers</a></li>
    <li class="{{strpos(Route::currentRouteName(), 'orders') !== false ? 'active' : '' }}"><a href="{{ Route('orders') }}">Bestellingen</a></li>
  </ul>
</div>
