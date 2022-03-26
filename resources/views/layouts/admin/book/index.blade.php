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
                        <th scope="col">Book Name</th>
                        <th scope="col">description</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">price</th>
                        <th scope="col">quantity</th>
                        <th scope="col">image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                        <td>{{$book->book_name}}</td>
                        <td>{{$book->description}}</td>
                        <td>{{$book->category->slug}}</td>
                        <td>{{$book->price}}</td>
                        <td>{{$book->quantity}}</td>
                        <td><img src={{$book->image}}></td>
                        <td>
                            <form action="{{route('admin.books.edit', $book->id)}}" method="get">
                                @csrf
                                @method('get')
                                <input type="submit" class="btn btn-success" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.books.destroy', $book->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
                                @csrf
                                @method('delete')
                                <input type="submit" class="btn btn-danger" value="Delete">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Recent Sales End -->
@endsection
