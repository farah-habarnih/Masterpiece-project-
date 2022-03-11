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

                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('admin.categories.update', $category)}}" method="POST">
                        @csrf
                        @method('put')
                        <tr>
                            <td>
                                <input type="text" name="category_name" class="form-control" value="{{$category->category_name}}" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" value="Edit category">
                            </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
