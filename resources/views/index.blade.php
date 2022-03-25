@extends('layouts.app')
@section('content')
<section class="home" id="home">
    <div class="content">
      <h3>Read More</h3>
      <span> Spend Less </span>
      <p>
        Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. voluptate
        dolorem pariatur.
      </p>
      <a href="{{ url('/shop') }}" class="btn-shop">shop now</a>
    </div>
  </section>

  <!-- home section ends -->



  <!-- icons section starts  -->

  <section class="icons-container">
    <div class="icons">
      <img src="images/icon-1.png" alt="free delivery" />
      <div class="info">
        <h3>free delivery</h3>
        <span>on all orders</span>
      </div>
    </div>

    <div class="icons">
      <img src="images/icon-2.png" alt="moneyback guarantee" />
      <div class="info">
        <h3>10 days returns</h3>
        <span>moneyback guarantee</span>
      </div>
    </div>

    <div class="icons">
      <img src="images/icon-3.png" alt="offer & gifts" />
      <div class="info">
        <h3>offer & gifts</h3>
        <span>on all orders</span>
      </div>
    </div>

    {{-- <div class="icons">
      <img src="images/icon-4.png" alt="" />
      <div class="info">
        <h3>secure paymens</h3>
        <span>protected by paypal</span>
      </div>
    </div> --}}
  </section>

  <!-- icons section ends -->

  <!-- prodcuts section starts  -->
  {{-- <div class="products-catagories-area clearfix">
    <div class="amado-pro-catagory clearfix">
    @foreach($categories as $category)
        <!-- Single Catagory -->
            <div class="single-products-catagory clearfix">
                <a href="/shop/category/{{$category->slug}}">
                    <img src="{{$category->img_src}}" alt="">
                    <!-- Hover Content -->
                    <div class="hover-content">
                        <div class="line"></div>
                        <p>From $180</p>
                        <h4>{{$category->slug}}</h4>
                    </div>
                </a>
            </div>
    @endforeach

    </div>
</div> --}}

<div class="container">
    <h2 class="heading"><span>Shop By Category </span></h2>
    <div class="row">
        @foreach($categories as $category)
        <div class="col-md-4">
            <figure class="card card-product-grid card-lg"> <a href="/shop/category/{{$category->slug}}" class="img-wrap" data-abc="true"><img src="{{$category->img_src}}" alt="{{$category->slug}}"></a>
                <figcaption class="info-wrap">
                    <div class="row">
                        <div class="col-md-10">  <a href="/shop/category/{{$category->slug}}" class="title" data-abc="true">{{$category->slug}}</a> </div>

                    </div>
                </figcaption>
            </figure>
        </div>
        @endforeach



    </div>
</div>



  {{-- <section class="products" id="products">
    <h1 class="heading">latest <span>products</span></h1>

    <div class="box-container">
      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="images/img-1.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-15%</span>
        <div class="image">
          <img src="images/img-2.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
          <img src="images/img-3.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-20%</span>
        <div class="image">
          <img src="images/img-4.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-17%</span>
        <div class="image">
          <img src="images/img-5.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-3%</span>
        <div class="image">
          <img src="images/img-6.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-18%</span>
        <div class="image">
          <img src="images/img-7.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-10%</span>
        <div class="image">
          <img src="images/img-8.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>

      <div class="box">
        <span class="discount">-5%</span>
        <div class="image">
          <img src="images/img-9.jpg" alt="" />
          <div class="icons">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="cart-btn">add to cart</a>
            <a href="#" class="fas fa-share"></a>
          </div>
        </div>
        <div class="content">
          <h3>flower pot</h3>
          <div class="price">$12.99 <span>$15.99</span></div>
        </div>
      </div>
    </div>
  </section> --}}


  <!-- prodcuts section ends -->


  <!-- review section starts  -->

  {{-- <section class="review" id="review">
    <h1 class="heading">customer's <span>review</span></h1>

    <div class="box-container">
      <div class="box">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
          asperiores laboriosam praesentium enim maiores? Ad repellat
          voluptates alias facere repudiandae dolor accusamus enim ut odit,
          aliquam nesciunt eaque nulla dignissimos.
        </p>
        <div class="user">
          <img src="images/pic-1.png" alt="" />
          <div class="user-info">
            <h3>john deo</h3>
            <span>happy customer</span>
          </div>
        </div>
        <span class="fas fa-quote-right"></span>
      </div>

      <div class="box">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
          asperiores laboriosam praesentium enim maiores? Ad repellat
          voluptates alias facere repudiandae dolor accusamus enim ut odit,
          aliquam nesciunt eaque nulla dignissimos.
        </p>
        <div class="user">
          <img src="images/pic-2.png" alt="" />
          <div class="user-info">
            <h3>john deo</h3>
            <span>happy customer</span>
          </div>
        </div>
        <span class="fas fa-quote-right"></span>
      </div>

      <div class="box">
        <div class="stars">
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
          <i class="fas fa-star"></i>
        </div>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti
          asperiores laboriosam praesentium enim maiores? Ad repellat
          voluptates alias facere repudiandae dolor accusamus enim ut odit,
          aliquam nesciunt eaque nulla dignissimos.
        </p>
        <div class="user">
          <img src="images/pic-3.png" alt="" />
          <div class="user-info">
            <h3>john deo</h3>
            <span>happy customer</span>
          </div>
        </div>
        <span class="fas fa-quote-right"></span>
      </div>
    </div>
  </section> --}}

  <!-- review section ends -->

  <!-- contact section starts  -->

  {{-- <section class="contact" id="contact">
    <h1 class="heading"><span> contact </span> us</h1>

    <div class="row">
      <form action="">
        <input type="text" placeholder="name" class="box" />
        <input type="email" placeholder="email" class="box" />
        <input type="number" placeholder="number" class="box" />
        <textarea
          name=""
          class="box"
          placeholder="message"
          id=""
          cols="30"
          rows="10"
        ></textarea>
        <input type="submit" value="send message" class="btn-shop" />
      </form>

      <div class="image">
        <img src="images/contact-img.svg" alt="" />
      </div>
    </div>
  </section> --}}
<br>
<br>
<br>
<br>

  <section class="contact-section">
  <div class="contact-container">
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">Surkhet, NP12</div>
          <div class="text-two">Birendranagar 06</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+0098 9893 5647</div>
          <div class="text-two">+0096 3434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">codinglab@gmail.com</div>
          <div class="text-two">info.codinglab@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>
          If you have any work from me or any types of quries related to my
          tutorial, you can send me message from here. It's my pleasure to
          help you.
        </p>
        <form action="#">
          <div class="input-box">
            <input type="text" placeholder="Enter your name" />
          </div>
          <div class="input-box">
            <input type="text" placeholder="Enter your email" />
          </div>
          <div class="input-box message-box">
            <textarea name="" id="" cols="30" rows="10" placeholder="Write your message"></textarea>
           </div>
          <div class="button">
            <input type="button" value="Send Now" />
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
  <!-- contact section ends -->

<!-- Slider Header-->
@endsection
