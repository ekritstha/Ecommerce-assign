<div class="mobile-nav">
  <div class="amado-navbar-brand">
     <a href="{{route('index')}}"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt="logo"></a>
  </div>
  <div class="amado-navbar-toggler">
    <span></span><span></span><span></span>
  </div>
</div>

<header class="header-area clearfix">
  <!-- Close Icon -->
  <div class="nav-close">
      <i class="fa fa-close" aria-hidden="true"></i>
  </div>
  <!-- Logo -->
  <div class="logo">
      <a href="{{route('index')}}"><img src="{{ asset('frontend/img/core-img/logo.png') }}" alt=""></a>
  </div>
  <!-- Amado Nav -->
  <nav class="amado-nav">
      <ul>
          <li class="{{ app('request')->is('/')?'active':'' }}"><a href="{{route('index')}}">Home</a></li>
          <li class="{{ app('request')->is('products')?'active':'' }}"><a href="{{route('products')}}">Shop</a></li>
          <li class="{{ app('request')->is('cart')?'active':'' }}"><a href="{{route('cart')}}">Cart</a></li>
          <li class="{{ app('request')->is('checkout')?'active':'' }}"><a href="{{route('checkout')}}">Checkout</a></li>
      </ul>
  </nav>
  <!-- Button Group -->
  <div class="amado-btn-group mt-30 mb-100">
      <a href="#" class="btn amado-btn mb-15">%Discount%</a>
      <a href="#" class="btn amado-btn active">New this week</a>
  </div>
  <!-- Cart Menu -->
  <div class="cart-fav-search mb-100">
      <a href="{{route('cart')}}" class="cart-nav"><img src="{{asset('frontend/img/core-img/cart.png')}}" alt=""> Cart 
        <span>
          ({{ Session::has('cart') ? Session::get('cart')->totalQty : 0 }})
        </span>
      </a>
      {{-- <a href="#" class="fav-nav"><img src="{{asset('frontend/img/core-img/favorites.png')}}" alt=""> Favourite</a> --}}
      <a href="#" class="search-nav"><img src="{{asset('frontend/img/core-img/search.png')}}" alt=""> Search</a>
  </div>
  <!-- Social Button -->
  <div class="social-info d-flex justify-content-between">
      <a href="{!! strip_tags(\App\Util\Util::getCData($components,'Instagram Link','description')) !!}" target="_blank">
        <i class="fa fa-instagram" aria-hidden="true"></i>
      </a>
      <a href="{!! strip_tags(\App\Util\Util::getCData($components,'Facebook Link','description')) !!}" target="_blank">
        <i class="fa fa-facebook" aria-hidden="true"></i>
      </a>
      <a href="{!! strip_tags(\App\Util\Util::getCData($components,'Twitter Link','description')) !!}" target="_blank">
        <i class="fa fa-twitter" aria-hidden="true"></i>
      </a>
  </div>
</header>