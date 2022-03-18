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

     <form method="post" action="{{ route('users.edit') }}">
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
                <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile" href="{{ route('users.edit',Auth::user()->id) }}"/>
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
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <table style="
                    background-color: #fbaf32; " class="table">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">Table number</th>
                                <th scope="col">Date</th>
                                <th scope="col">Time</th>
                                <th scope="col">status</th>
                                <th scope="col">Note</th>
                                <th scope="col">Action</th>


                              </tr>
                            </thead>
                            <tbody>

                          {{-- <div style="display:none">
                            {{ $count= $user->tables->count()}}

                            {{ $count2=$count-$count+1 }}
                                </div> --}}
                                @php
                                $i=0;

                                @endphp

                                    {{-- @foreach($user->tables as $table)
                              <tr>

                                 <th scope="row">{{ ++$i }}</th>
                                <td>{{$table->number}}</td>
                                <td> {{$table->pivot->date}}</td>
                                <td> {{$table->pivot->time}}</td>
                                <td> {{$table->pivot->status}}</td>
                                <td> {{$table->pivot->note}}</td>
                                <td> </form>
                                    <form action="{{ url('/user-profile-delete/'.$table->pivot->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Delete</button>
                                    </form>
                                </td>
                                     {{-- {{$count2=$count2+1}} --}}
                                      {{-- </tr>@endforeach --}}

                            </tbody>
                          </table>

                    </div>
                </div>
            </div>
        </div>


</div>
@endsection
