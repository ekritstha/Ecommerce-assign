<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    @yield('title')
    @include('frontend.partials.css')
</head>

<body>
  @include('frontend.partials.search')
  <div class="main-content-wrapper d-flex clearfix">
    @include('frontend.partials.sidebar')
    @yield('main-content')
  </div>
  @include('frontend.partials.newsletter')
  @include('frontend.partials.footer')
  @include('frontend.partials.script')
</body>

</html>