@extends('layouts.app')

@section('content')
<section class="home-top" id="home-top">
    <div class="content">
      <h3>Cart</h3>

      <a href="{{ url('/') }}">HOME / </a> <a href="/cart/view-cart">Cart</a>
    </div>
  </section>
    <div class="cart-table-area section-padding-100">
        <div class="container-fluid">

            <div class="row">
                @if (session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
               @endif
                <div class="col-md-8 col-lg-8">
                    <div class="cart-title mt-50">
                        <h2 class="heading-cart">Shopping Cart</h2>
                    </div>
                    @empty($cart)
                        <h5 class="heading-cart"> Your Cart is Empty <a href="/shop" class="link-cart">Back To Shop</a></h5>
                        {{-- <button type="submit" class="btn-cart">
                            <a href="/shop" class="link-cart">Back To Shop</a>
                        </button> --}}
                        @else
                    <div class="cart-table clearfix">
                            <table class="table table-responsive">
                                <thead>
                                <tr>
                                    <th>Book Image</th>
                                    <th>Book Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($cart as $key=>$item)

                                    <tr>
                                        <td class="cart_product_img">
                                            <a href="#"><img src="{{$item['image_url']}}" alt="Book image" class="cart-img"></a>
                                        </td>
                                        <td class="cart_product_desc">
                                            <h5>{{$item['name']}}</h5>
                                        </td>
                                        <td class="price">
                                            <span>${{$item['price']}}</span>
                                        </td>
                                        {{-- <td class="qty">
                                            <div class="qty-btn d-flex">
                                                <p>Qty</p>
                                                <div class="quantity">
                                                    <span class="qty-minus"
                                                          onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 1 ) effect.value--;return false;"><i
                                                            class="fa fa-minus" aria-hidden="true"></i></span>
                                                    <input type="number" class="qty-text" id="qty" step="1" min="1"
                                                           max="300" name="quantity" value="{{$item['quantity']}}">
                                                    <span class="qty-plus"
                                                          onclick="var effect = document.getElementById('qty'); var qty = effect.value; if( !isNaN( qty )) effect.value++;return false;"><i
                                                            class="fa fa-plus" aria-hidden="true"></i></span>
                                                </div>
                                            </div>
                                        </td> --}}
                                        <td>{{$item['quantity']}}</td>
                                        <td>
                                            <a
                                            href="/cart/remove-item/{{$key}}"
                                             class="link-cart"><i class="fa-solid fa-circle-xmark"></i>remove</a>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="cart-summary">
                        <h5>Cart Total</h5>
                        <ul class="summary-table">
                            <li><span>subtotal:</span> <span>${{$total}}</span></li>
                            <li><span>delivery:</span> <span>Free</span></li>
                            <li><span>total:</span> <span>${{$total}}</span></li>
                        </ul>
                        <div class="cart-btn mt-100">
                            <a href="{{route('checkout')}}" class="btn-contact">Checkout</a>
                        </div>
                    </div>
                        @endempty
                </div>
            </div>
        </div>
    </div>
    {{-- <h2 class="heading"><span>Shopping Cart </span></h2>
    @empty($cart)
    <h5> Your Cart is Empty</h5>
    @else
    <div style="overflow-x:auto;margin:3.5rem;">
        <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Points</th>
            <th>Points</th>
            <th>Points</th>
          </tr>
          <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
            <td>50</td>
            <td>50</td>
          </tr>
        </table>
      </div>
    </div>
    <div style="overflow-x:auto;margin:3.5rem;">
        <table>
          <tr>
            <th>First Name</th>
            <th>Last Name</th>

          </tr>
          <tr>
            <td>Jill</td>
            <td>Smith</td>

          </tr>
        </table>
      </div>
    </div> --}}
@endsection
