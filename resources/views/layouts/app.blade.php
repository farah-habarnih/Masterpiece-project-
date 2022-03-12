<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ===== CSS ===== -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
    />
    <!-- ===== Boxicons CSS ===== -->
    <link
      href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    rel="stylesheet"
  />
  <link
    href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"
    rel="stylesheet"
    id="bootstrap-css"
  />

    <title>ShareBook</title>
  </head>
  <body>
    <!--  Navbar-->
    <nav>
      <div class="nav-bar">
        <i class="bx bx-menu sidebarOpen"></i>
        <span class="logo navLogo"><a href="#">ShareBook</a></span>

        <div class="menu">
          <div class="logo-toggle">
            <span class="logo"><a href="#">ShareBook</a></span>
            <i class="bx bx-x siderbarClose"></i>
          </div>

          <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Shop</a></li>

            <li><a href="#">Contact Us</a></li>
            @guest
            @if (Route::has('login'))
            <li> <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
            @endif

            @if (Route::has('register'))
            <li> <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
            @endif
        @else

              <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li> <a href="{{ url('user-profile') }}" class="dropdown-item">My profile</a></li>
                    <li> <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
        @endguest
          </ul>
        </div>

        <div class="darkLight-searchBox">
          <div class="dark-light">
            <i class="bx bx-moon moon"></i>
            <i class="bx bx-sun sun"></i>
          </div>

          <div class="searchBox">
            <div class="searchToggle">
              <i class="bx bx-x cancel"></i>
              <i class="bx bx-search search"></i>
            </div>

            <div class="search-field">
              <input type="text" placeholder="Search..." />
              <i class="bx bx-search"></i>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <section class="home" id="home">
        <div class="content">
          <h3>Read More</h3>
          <span> Spend Less </span>
          <p>
            Lorem ipsum dolor sit amet consectetur <br> adipisicing elit. voluptate
            dolorem pariatur.
          </p>
          <a href="#" class="btn-shop">shop now</a>
        </div>
      </section>

      <!-- home section ends -->

      <!-- about section starts  -->

      <section class="about" id="about">
        <h1 class="heading"><span> about </span> us</h1>

        <div class="row">
          <div class="video-container">
            <video src="images/about-vid.mp4" loop autoplay muted></video>
            <h3>best flower sellers</h3>
          </div>

          <div class="content">
            <h3>why choose us?</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem cumque
              sit nemo pariatur corporis perspiciatis aspernatur a ullam
              repudiandae autem asperiores quibusdam omnis commodi alias repellat
              illum, unde optio temporibus.
            </p>
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit.
              Accusantium ea est commodi incidunt magni quia molestias
              perspiciatis, unde repudiandae quidem.
            </p>
            <a href="#" class="btn-shop">learn more</a>
          </div>
        </div>
      </section>

      <!-- about section ends -->

      <!-- icons section starts  -->

      <section class="icons-container">
        <div class="icons">
          <img src="images/icon-1.png" alt="" />
          <div class="info">
            <h3>free delivery</h3>
            <span>on all orders</span>
          </div>
        </div>

        <div class="icons">
          <img src="images/icon-2.png" alt="" />
          <div class="info">
            <h3>10 days returns</h3>
            <span>moneyback guarantee</span>
          </div>
        </div>

        <div class="icons">
          <img src="images/icon-3.png" alt="" />
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

      <section class="products" id="products">
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
      </section>

      <!-- prodcuts section ends -->

      <!-- review section starts  -->

      <section class="review" id="review">
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
      </section>

      <!-- review section ends -->

      <!-- contact section starts  -->

      <section class="contact" id="contact">
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
      </section>

      <!-- contact section ends -->
    <main >
        @yield('content')
    </main>
    <!-- Slider Header-->

<br>
<br>

    <!--   Footer-->
    <footer>
      <div class="content">
        <div class="top">
          <div class="logo-details">
            <i class="fab fa-slack"></i>
            <span class="logo_name">ShareBook</span>
          </div>
          <div class="media-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-youtube"></i></a>
          </div>
        </div>
        <div class="link-boxes">
          <ul class="box">
            <li class="link_name">Company</li>
            <li><a href="#">Home</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Get started</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Services</li>
            <li><a href="#">App design</a></li>
            <li><a href="#">Web design</a></li>
            <li><a href="#">Logo design</a></li>
            <li><a href="#">Banner design</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Account</li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">My account</a></li>
            <li><a href="#">Prefrences</a></li>
            <li><a href="#">Purchase</a></li>
          </ul>
          <ul class="box">
            <li class="link_name">Courses</li>
            <li><a href="#">HTML & CSS</a></li>
            <li><a href="#">JavaScript</a></li>
            <li><a href="#">Photography</a></li>
            <li><a href="#">Photoshop</a></li>
          </ul>
          <ul class="box input-box">
            <li class="link_name">Subscribe</li>
            <li><input type="text" placeholder="Enter your email" /></li>
            <li><input type="button" value="Subscribe" /></li>
          </ul>
        </div>
      </div>
      <div class="bottom-details">
        <div class="bottom_text">
          <span class="copyright_text"
            >Copyright © 2021 <a href="#">ShareBook.</a>All rights
            reserved</span
          >
          <span class="policy_terms">
            <a href="#">Privacy policy</a>
            <a href="#">Terms & condition</a>
          </span>
        </div>
      </div>
    </footer>

    {{-- <script src="{{asset('js/main.js')}}"></script> --}}
    {{-- <script src="{{asset('admin/js/main.js')}}"></script> --}}
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    {{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> --}}
    <script src="{{asset('js/app.js') }}"></script>
  </body>
</html>
