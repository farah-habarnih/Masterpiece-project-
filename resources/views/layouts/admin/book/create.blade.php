@extends('layouts.admin.app')
@section('content')

<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
           @endif
        <div class="table-responsive">
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Book Name<span style="color: red">*</span></th>
                        <th scope="col">description<span style="color: red">*</span></th>
                        <th scope="col">slug<span style="color: red">*</span></th>
                        <th scope="col">price<span style="color: red">*</span></th>
                        <th scope="col">quantity<span style="color: red">*</span></th>
                        <th scope="col">image <small style="color: red"></small></th>
                        <th scope="col">category_name <small style="color: red"></small></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('admin.books.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <tr>
                            <td>
                                <input type="text" name="book_name" class="form-control" required>
                                {{-- @error('name') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="description" class="form-control" required>
                                {{-- @error('email') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="slug" class="form-control" required>
                                {{-- @error('email') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <input type="number" name="price" class="form-control" required>
                                {{-- @error('password') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <input type="number" name="quantity" class="form-control" required>
                                {{-- @error('password') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="image" class="form-control">
                                {{-- @error('mobile_number') --}}
                                {{-- <span class="badge" style="color: red">{{$message}}</span> --}}
                                {{-- @enderror --}}
                            </td>
                            <td>
                                <select class="form-control col-form-select" name="category_id"
                                aria-label="Default select example">
                            {{-- <option selected>Open this select menu</option> --}}
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" @if($category->id) selected @endif>{{$category->slug}}</option>
                            @endforeach
                                {{-- <input type="number" name="category_id" class="form-control"> --}}
                                {{-- <div class="dropdown">
                                    <select class="btn btn-dark dropdown-toggle"   type="button" name="category_id" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                        @foreach($categories as $category)
                                      <option style="color: white;text-align:left;" class="dropdown-item mt-1" value="{{ $category->id }}">{{ $category->category_name }}</option>
                                        @endforeach
                                      </select>


                                  </div> --}}
                            </td>
                            <td>
                                <input type="submit" class="btn btn-primary" value="Add Book">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection
