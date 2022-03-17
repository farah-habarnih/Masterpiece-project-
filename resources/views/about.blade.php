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
    <h2 class="heading"><span> about </span> us</h2>

    <div class="row">
      <div class="video-container">
        <video src="images/about-vid.mp4" loop autoplay muted></video>
        <h3>best book sellers</h3>
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



@endsection
