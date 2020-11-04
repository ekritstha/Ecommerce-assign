@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
  'pagetitle'=> 'My Cart'
])
@endsection
@section('main-content')
<div class="cart-table-area section-padding-100">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-lg-8">
        <div class="cart-title mt-50">
          <h2>Shopping Cart</h2>
        </div>
        <div class="cart-table clearfix">
          @if(Session::has('cart'))
          <table class="table table-responsive">
            <thead>
              <tr>
                <th></th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
              </tr>
            </thead>
            <tbody>
              @foreach($products as $product)
              <tr>
                <td class="cart_product_img">
                  <a href="#"><img src="{{ asset('images/products/'.$product['item']['image1']) }}" alt="Product" style="width: 100%"></a>
                </td>
                <td class="cart_product_desc">
                  <h5>{{ $product['item']['name'] }}</h5>
                </td>
                <td class="price">
                  <span>Rs.{{ $product['price'] }}</span>
                </td>
                <td class="qty">
                  <div class="qty-btn d-flex">
                    <p>Qty</p>
                    <div class="quantity">
                      {{-- <form action="{{route('addToCart', $product['item']['id'])}}">
                        @csrf
                        <input type="hidden" name="quantity" value="-1">
                        <span class="qty-minus"><i class="fa fa-minus" aria-hidden="true" style="margin-right: -30px"></i></span>
                      </form> --}}
                      <p class="qty-text"> {{ $product['qty'] }}</p>
                      {{-- <form action="{{route('addToCart', $product['item']['id'])}}">
                        @csrf
                        <input type="hidden" name="quantity" value="1">
                        <span class="qty-plus"><i class="fa fa-plus" aria-hidden="true" style="margin-left: 11px"></i></span>
                      </form> --}}
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
          @else
            <h5>No item in Cart</h5>
          @endif
        </div>
      </div>
      @if(Session::has('cart'))
      <div class="col-12 col-lg-4">
        <div class="cart-summary">
          <h5>Cart Total</h5>
          <ul class="summary-table">
            <li>
              <span>subtotal:</span> 
              <span>Rs.{{ $totalPrice }}</span>
            </li>
            <li>
              <span>delivery:</span> 
              <span>Free</span>
            </li>
            <li>
              <span>total:</span> 
              <span>Rs.{{ $totalPrice }}</span>
            </li>
          </ul>
          <div class="cart-btn mt-100">
            <a href="{{route('checkout')}}" class="btn amado-btn w-100">Checkout</a>
          </div>
        </div>
      </div>
      @endif
    </div>
  </div>
</div>
@endsection