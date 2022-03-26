@extends('layouts.app')
@section('content')
    <!-- book Details Area Start -->
    <section class="home-top" id="home-top">
        <div class="content">
          <h3>Shop</h3>

          <a href="{{ url('/') }}">HOME / </a><a href="{{ url('/shop') }}">Shop/</a>{{$book['slug']}}
        </div>
      </section>
      <br>
      <br>
    <div class="single-book-area section-padding-100 clearfix">
        <div class="container px-lg-5">
            @if (session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
           @endif

            <div class="row">
                <div class="col-2 col-lg-7">
                    <div class="single_book_thumb">
                        <div id="book_details_slider" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li class="active" data-target="#book_details_slider" data-slide-to="0" style="background-image: url({{$book['image']}});">
                                </li>

                            </ol>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <a class="gallery_img" href="{{$book['image']}}">
                                        <img class="d-block w-100" src="{{$book['image']}}" alt="First slide">
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <div class="single_book_desc">
                        <!-- book Meta Data -->
                        <div class="book-meta-data">
                            <div class="line"></div>
                            <p class="book-price">${{$book['price']}}</p>

                                <h6>{{$book['book_name']}}</h6>

                            <!-- Ratings & Review -->
                            {{-- <div class="ratings-review mb-15 d-flex align-items-center justify-content-between">
                                <div class="ratings">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                </div>
                                <div class="review">
                                    <a href="#">Write A Review</a>
                                </div>
                            </div> --}}
                            <!-- Avaiable -->
                            {{-- <p class="avaibility"><i class="fa fa-circle"></i> In Stock</p> --}}
                        </div>

                        <div class="short_overview my-5">
                            <p>{{$book['description']}}</p>
                        </div>

                        <!-- Add to Cart Form -->
                        <form class="cart clearfix" method="post"
                        action="{{route('add-to-cart',['book_id' =>$book['id']])}}"
                        >
                           @csrf
                            <div class="cart-btn d-flex mb-50">
                                <p>Qty</p>
                                <div class="quantity">
                                    <span class="qty-minus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;">
                                        {{-- <i class="fa fa-caret-down" aria-hidden="true"></i> --}}
                                    </span>
                                    <input type="number" class="qty-text" id="qty" step="1" min="1" max="{{$book['quantity']}}" name="quantity" value="1">
                                    <span class="qty-plus" onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;">
                                        {{-- <i class="fa fa-caret-up" aria-hidden="true"></i> --}}
                                </span>
                                </div>
                            </div>
                            <button type="submit" class="btn-contact">Add to cart</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- book Details Area End -->
@endsection
