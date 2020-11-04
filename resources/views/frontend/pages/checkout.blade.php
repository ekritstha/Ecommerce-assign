@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> 'Check Out'
])
@endsection
@section('main-content')
<div class="cart-table-area section-padding-100">
  <div class="container-fluid">
      <div class="row">
          <div class="col-12 col-lg-8">
              <div class="checkout_details_area mt-50 clearfix">
                  <div class="cart-title">
                      <h2>Checkout</h2>
                  </div>

                  <form action="{{ route('post-checkout') }}" method="post">
                      @csrf
                      <div class="row">
                          <div class="col-md-12 mb-3">
                              <input type="text" class="form-control" id="name" value="" placeholder="Name" name="name" required>
                          </div>
                          <div class="col-12 mb-3">
                              <input type="text" class="form-control mb-3" id="address" placeholder="Address" name="address" value="" required>
                          </div>
                          <div class="col-md-12 mb-3">
                              <input type="number" class="form-control" id="contact" name="contact" min="0" placeholder="Phone No" value="" required>
                          </div>
                          <div class="col-md-3 mb-3">
                              <button type="submit" class="btn amado-btn w-100">Checkout</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
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
              </div>
          </div>
      </div>
  </div>
</div>

@endsection