@extends('layouts.admin.app')
@section('content')
{{-- reports --}}
<div class="container-fluid pt-4 px-4">

    <div class="row g-4">
        <div class="col-sm-6 col-xl-3">

            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a class="nav-item nav-link">
                <i class="fas fa-calendar-check me-2 fa-3x text-primary"></i>
            </a>
                <div class="ms-3">
                    <p class="mb-2">Total Categories</p>
                    <h6 class="mb-0">{{$allCategories}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href="{{route('admin.users')}}" class="nav-item nav-link">
                <i class="fas fa-users me-2 fa-3x text-primary"></i>
            </a>
                <div class="ms-3">
                    <p class="mb-2">Registered Users</p>
                    <h6 class="mb-0">{{$allUsers}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                <a href="{{route('admin.books')}}" class="nav-item nav-link">
                <i class="fa fa-table me-2 fa-3x text-primary"></i>
            </a>
                <div class="ms-3">
                    <p class="mb-2">Total Books</p>
                    <h6 class="mb-0">{{$allBooks}}</h6>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-xl-3">

            <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
                {{-- <a href="{{route('admin.contacts')}}" class="nav-item nav-link "> --}}
                <i class="fa fa-address-book me-2 fa-3x text-primary"></i>
                <div class="ms-3">
                </a>
                    <p class="mb-2">Total Contacts</p>
                    {{-- <h6 class="mb-0">{{$allContacts}}</h6> --}}
                </div>
            </div>
        </div>
    </div>
</div>

{{-- reservations --}}
<div class="container-fluid pt-4 px-4">


</div>
<!-- Recent Sales End -->
@endsection
