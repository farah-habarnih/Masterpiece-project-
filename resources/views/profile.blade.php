@extends('layouts.app')

@section('content')
<section class="home-top" id="home-top">
    <div class="content">
      <h3>My Profile</h3>

      <a href="{{ url('/') }}">HOME / </a><a href="{{ url('/profile') }}">My Profile</a>
    </div>
  </section>

<div class="container emp-profile">

    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">×</span>
        </button>
        <p class="updated">{!! session()->get('success') !!}</p></div>
        @endif

     <form method="post"
     action="{{ route('users.edit') }}"
     >
        @csrf

        <div class="row">
            {{-- <div class="col-md-2"> --}}
                {{-- <div class="profile-img">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/>
                    <div class="file btn btn-lg btn-primary">
                        Change Photo
                        <input type="file" name="file"/>
                    </div>
                </div> --}}
            {{-- </div> --}}
            <div class="col-md-4">
                <div class="profile-head">
                            <h5>
                             Hello
                             {{Auth::user()->name}}
                            </h5>



                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">My Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">My Orders</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"
                 href="{{ route('users.edit',Auth::user()->id) }}"
                 />
            </div>
        </div>
        <div class='row'>
            <div class="col-md-6">
                <div class="tab-content profile-tab" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Name</label>
                                    </div>
                                    <div class="col-md-6">

                                        <input id="form_name" type="text" name="name"
                                        value="{{Auth::user()->name}}"
                                        >
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label>Email</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="mobile_number" type="text" name="mobile_number"
                                        value=" {{$user->email}} "
                                       disabled >

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <label> New password</label>
                                    </div>
                                    <div class="col-md-6">
                                        <input id="form_password" type="text" name="password"
                                        {{-- value="{{$user->password}}
                                        " --}}
                                         >
                                    </div>
                                </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab" style="overflow-x:auto;">
                        <table style="
                         background-color: #FFF5FA; " class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">town</th>
                                <th scope="col">total</th>
                                <th scope="col">Order Date</th>
                                <th scope="col">Order Status</th>


                              </tr>
                            </thead>
                            <tbody>

                           {{-- <div style="display:none">



                                </div> --}}
                                @php
                                $i=0;

                                @endphp
                                @foreach($orders as $order)
                              <tr>
                                <th scope="row">{{ ++$i }}</th>
                                <td>{{$order->name}}</td>
                                <td>{{$order->address}}</td>
                                <td> {{$order->town}}</td>
                                <td> {{$order->total}}</td>
                                <td> {{$order->created_at}}</td>
                                <td>{{$order->order_status}}</td>
                            </tr>
                            @endforeach
                            </tbody>
                          </table>

                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>


</div>
@endsection
