@extends('layouts.app')

@section('content')
<section class="home-top" id="home-top">
    <div class="content">
      <h3>About Us</h3>

      <a href="{{ url('/') }}">HOME / </a><a href="{{ url('/about-us') }}">About Us</a>
    </div>
  </section>
 <!-- about section starts  -->

 <section class="about" id="about">
    <h2 class="heading"><span>About us </span></h2>

    <div class="row">
      {{-- <div class="video-container">
        <video src="images/about-vid.mp4" loop autoplay muted></video>
        <h3>best book sellers</h3>
      </div> --}}

      <div class="content">
        {{-- <h3>why choose us?</h3> --}}
        <p>
            ShareBook its An online E-commerce website for selling used books for people who suffer from high book prices in the market, The target market is Jordan and the payment method will be cash on delivery.
        </p>
        {{-- <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Accusantium ea est commodi incidunt magni quia molestias
          perspiciatis, unde repudiandae quidem.
        </p> --}}
        {{-- <a href="#" class="btn-contact">learn more</a> --}}
      </div>
    </div>
    <h2 class="heading"><span>Our Team</span></h2>
<div class="row-about">
  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container-team">
        <h2>Farah Ali</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Farah@gmail.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container-team">
        <h2>Ahmad Omar</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Ahmad@gmail.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container-team">
        <h2>Ali Wael</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>Ali@gmail.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>
</div>
  </section>

  <!-- about section ends -->



@endsection
