@extends('layouts.app')

@section('content')
<section class="home-top" id="home-top">
    <div class="content">
      <h3>About Us</h3>

      <a href="{{ url('/') }}">HOME / </a><a href="{{ url('/about-us') }}">About Us</a>
    </div>
  </section>





  @endsection
