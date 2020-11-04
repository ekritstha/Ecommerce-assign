<div class="search-wrapper section-padding-100">
  <div class="search-close">
      <i class="fa fa-close" aria-hidden="true"></i>
  </div>
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="search-content">
                  <form action="{{ route('search') }}" method="get">
                      <input type="search" name="search" id="search" placeholder="Type your keyword...">
                      <button type="submit"><img src="{{asset('frontend/img/core-img/search.png')}}" alt=""></button>
                  </form>
              </div>
          </div>
      </div>
  </div>
</div>