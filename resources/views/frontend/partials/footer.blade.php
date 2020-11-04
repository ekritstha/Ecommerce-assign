<footer class="footer_area clearfix">
  <div class="container">
      <div class="row align-items-center">
          <!-- Single Widget Area -->
          <div class="col-12 col-lg-4">
              <div class="single_widget_area">
                  <!-- Logo -->
                  <div class="footer-logo mr-50">
                      <a href="{{route('index')}}"><img src="{{asset('frontend/img/core-img/logo2.png')}}" alt=""></a>
                  </div>
                  <!-- Copywrite Text -->
                  <p class="copywrite">
                      Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</p>
              </div>
          </div>
          <!-- Single Widget Area -->
          <div class="col-12 col-lg-8">
              <div class="single_widget_area">
                  <!-- Footer Menu -->
                  <div class="footer_menu">
                      <nav class="navbar navbar-expand-lg justify-content-end">
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#footerNavContent" aria-controls="footerNavContent" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
                          <div class="collapse navbar-collapse" id="footerNavContent">
                              <ul class="navbar-nav ml-auto">
                                  <li class="nav-item {{ app('request')->is('/')?'active':'' }}">
                                      <a class="nav-link" href="{{route('index')}}">Home</a>
                                  </li>
                                  <li class="nav-item {{ app('request')->is('products')?'active':'' }}">
                                      <a class="nav-link" href="{{route('products')}}">Shop</a>
                                  </li>
                                  <li class="nav-item {{ app('request')->is('cart')?'active':'' }}">
                                      <a class="nav-link" href="{{route('cart')}}">Cart</a>
                                  </li>
                                  <li class="nav-item {{ app('request')->is('checkout')?'active':'' }}">
                                      <a class="nav-link" href="{{route('checkout')}}">Checkout</a>
                                  </li>
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
          </div>
      </div>
  </div>
</footer>