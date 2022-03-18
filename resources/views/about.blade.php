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
    <h2 class="heading"><span>why choose us? </span></h2>

    <div class="row">
      {{-- <div class="video-container">
        <video src="images/about-vid.mp4" loop autoplay muted></video>
        <h3>best book sellers</h3>
      </div> --}}

      <div class="content">
        {{-- <h3>why choose us?</h3> --}}
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
    <h2 class="heading"><span>Our Team</span></h2>
<div class="row-about">
  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team1.jpg" alt="Jane" style="width:100%">
      <div class="container-team">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container-team">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://www.w3schools.com/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container-team">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="btn-contact">Contact</button></p>
      </div>
    </div>
  </div>
</div>
  </section>

  <!-- about section ends -->



@endsection
