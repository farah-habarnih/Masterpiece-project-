@extends('layouts.admin.app')
@section('content')
<div class="container-fluid pt-4 px-4">
    <div class="bg-light text-center rounded p-4">
        <div class="table-responsive">
            @if (session('message'))
            <div class="alert alert-success">
                {{session('message')}}
            </div>
           @endif
            <table class="table text-start align-middle table-bordered table-hover mb-0">
                <thead>
                    <tr class="text-dark">
                        <th scope="col">Book Name<span style="color: red">*</span></th>
                        <th scope="col">description<span style="color: red">*</span></th>
                        <th scope="col">price<span style="color: red">*</span></th>
                        <th scope="col">image <small style="color: red"></small></th>
                        <th scope="col">category_id <small style="color: red"></small></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('admin.books.update', $book)}}" method="POST">
                        @csrf
                        @method('put')
                        <tr>
                            <td>
                                <input type="text" name="book_name" class="form-control" value="{{$book->book_name}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="description" class="form-control" value="{{$book->description}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="price" class="form-control" value="{{$book->price}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="image" class="form-control" value="{{$book->image}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>

                            <td>
                                <input type="text" name="category_id" class="form-control" value="{{$book->category_id}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" value="Edit book">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
