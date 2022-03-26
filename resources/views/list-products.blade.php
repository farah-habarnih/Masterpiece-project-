@extends('layouts.app')

@section('content')
<section class="home-top" id="home-top">
    <div class="content">
      <h3>Shop</h3>

      <a href="{{ url('/') }}">HOME / </a><a href="{{ url('/shop') }}">Shop</a>
    </div>
  </section>
  <br>
  <br>
  <div class="shop-header">
    <!-- Widget Title -->
    <h6 class="header-category">Catagories</h6>

    <!--  Catagories  -->
    <div class="catagories-menu">
        <ul class="categories-list">
            @foreach($categories as $category)
            <li><a href="/shop/category/{{$category->slug}}">{{$category->slug}}</a></li>
        @endforeach
        </ul>
    </div>
</div>
<br>
<br>
<div class="container">
    {{-- <h2 class="heading"><span>Shop By Category </span></h2> --}}
    @if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
   @endif
    <div class="row">
        @foreach($books as $book)
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="/shop/book/{{$book->slug}}" class="img-wrap" data-abc="true"><img src="{{$book->image}}" alt="{{$book->slug}}"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-12">  <a href="/shop/book/{{$book->slug}}" class="title" data-abc="true">{{$book->book_name}}</a> </div>

                    </div>
                </figcaption>
                {{-- <form class="cart clearfix" method="post"
                        action="{{route('add-to-cart',['book_id' =>$book['id']])}}"
                        >
                           @csrf

                            <button type="submit" class="btn amado-btn">Add to cart</button>
                        </form> --}}
                <div class="bottom-wrap">
                    <div class="price-wrap"> <span class="price h5">{{$book->price}}</span> <br> <small class="text-success">Free shipping</small> </div>

                    <form method="post"
                        action="{{route('Add-To-Cart',['book_id' =>$book['id']])}}"
                        >
                           @csrf

                            <button type="submit" class="btn-contact">Add to cart</button>
                        </form>
                     {{-- <a href="{{route('add-to-cart',['book_id' =>$book['id']])}}" class="btn btn-primary float-right" data-abc="true"> Add To Cart</a> --}}
                </div>
            </figure>
        </div>
        @endforeach



    </div>
</div>



















@endsection
