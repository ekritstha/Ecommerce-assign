@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
    'pagetitle'=> $product->name
])
@endsection
@section('main-content')
<div class="single-product-area section-padding-100 clearfix">
  <div class="container-fluid">

      <div class="row">
          <div class="col-12">
              <nav aria-label="breadcrumb">
                  <ol class="breadcrumb mt-50">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item"><a href="#">{{$product->categoryId->name}}</a></li>
                      <li class="breadcrumb-item active" aria-current="page">{{$product->name}}</li>
                  </ol>
              </nav>
          </div>
      </div>

      <div class="row">
          <div class="col-12 col-lg-7">
              <div class="single_product_thumb">
                  <div id="product_details_slider" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                          <li class="active" data-target="#product_details_slider" data-slide-to="0" style="background-image: url({{ asset('images/products/'.$product->image1) }});">
                          </li>
                          <li data-target="#product_details_slider" data-slide-to="1" style="background-image: url({{ asset('images/products/'.$product->image2) }});">
                          </li>
                          <li data-target="#product_details_slider" data-slide-to="2" style="background-image: url({{ asset('images/products/'.$product->image3) }});">
                          </li>
                          <li data-target="#product_details_slider" data-slide-to="3" style="background-image: url({{ asset('images/products/'.$product->image4) }});">
                          </li>
                      </ol>
                      <div class="carousel-inner">
                          <div class="carousel-item active">
                              <a class="gallery_img" href="{{ asset('images/products/'.$product->image1) }}">
                                  <img class="d-block w-100" src="{{ asset('images/products/'.$product->image1) }}" alt="First slide">
                              </a>
                          </div>
                          <div class="carousel-item">
                              <a class="gallery_img" href="{{ asset('images/products/'.$product->image2) }}">
                                  <img class="d-block w-100" src="{{ asset('images/products/'.$product->image2) }}" alt="Second slide">
                              </a>
                          </div>
                          <div class="carousel-item">
                              <a class="gallery_img" href="{{ asset('images/products/'.$product->image3) }}">
                                  <img class="d-block w-100" src="{{ asset('images/products/'.$product->image3) }}" alt="Third slide">
                              </a>
                          </div>
                          <div class="carousel-item">
                              <a class="gallery_img" href="{{ asset('images/products/'.$product->image4) }}">
                                  <img class="d-block w-100" src="{{ asset('images/products/'.$product->image4) }}" alt="Fourth slide">
                              </a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-12 col-lg-5">
              <div class="single_product_desc">
                  <!-- Product Meta Data -->
                  <div class="product-meta-data">
                      <div class="line"></div>
                      <p class="product-price">Rs.{{$product->price}}</p>
                      <a href="product-details.html">
                          <h6>{{$product->name}}</h6>
                      </a>
                      <!-- Ratings & Review -->
                      <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                          <div class="ratings">
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                              <i class="fa fa-star" aria-hidden="true"></i>
                          </div>
                          {{-- <div class="review">
                              <a href="#">Write A Review</a>
                          </div> --}}
                      </div>
                      <!-- Avaiable -->
                      <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p>
                  </div>

                  <div class="short_overview my-5">
                      <p>{!!$product->description!!}</p>
                  </div>

                  <!-- Add to Cart Form -->
                  <form class="cart clearfix" method="post" action="{{route('addToCart', $product->id)}}">
                    @csrf
                      <div class="cart-btn d-flex mb-50">
                          <p>Qty</p>
                          <div class="quantity">
                              <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i class="fa fa-caret-down" aria-hidden="true"></i></span>
                              <input type="number" class="qty-text" id="qty" step="1" min="1" max="300" name="quantity" value="1">
                              <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i class="fa fa-caret-up" aria-hidden="true"></i></span>
                          </div>
                      </div>
                      <button type="submit" name="addtocart" value="5" class="btn amado-btn">Add to cart</button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection