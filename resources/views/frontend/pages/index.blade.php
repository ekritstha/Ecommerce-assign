@extends('frontend.master')
@section('title')
@include('frontend.partials.title',[
'pagetitle'=> 'Ecommerce Site'
])
@endsection
@section('main-content')
    <div class="products-catagories-area clearfix">
        <div class="amado-pro-catagory clearfix">
            @foreach(\App\Util\Util::getCategories() as $category)
            <div class="single-products-catagory clearfix">
                <a href="{{route('category', $category->slug)}}">
                    <img src="{{asset('images/category/'.$category->image)}}" alt="">
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From Rs.{{$category->start_price}}</p>
                        <h4>{{$category->name}}</h4>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>    
@endsection