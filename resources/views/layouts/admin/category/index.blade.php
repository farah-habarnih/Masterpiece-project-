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
                        <th scope="col">Category Name</th>
                        <th scope="col">Category Image</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->slug}}</td>
                        <td><img src="{{$category->img_src}}"/></td>
                        <td>
                            <form action="{{route('admin.categories.edit', $category->id)}}" method="get">
                                @csrf
                                @method('get')
                                <input type="submit" class="btn btn-success" value="Edit">
                            </form>
                        </td>
                        <td>
                            <form action="{{route('admin.categories.destroy', $category->id)}}" method="post" onsubmit="return confirm('are you sure ?')">
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
