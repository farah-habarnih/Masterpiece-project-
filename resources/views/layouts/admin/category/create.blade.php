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
                        <th scope="col">Category Name<span style="color: red">*</span></th>
                        <th scope="col">Category Image<span style="color: red">*</span></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('admin.categories.store')}}" method="POST">
                        @csrf
                        @method('post')
                        <tr>
                            <td>
                                <input type="text" name="slug" class="form-control" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red"></span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="text" name="img_src" class="form-control" required>
                                {{-- @error('name')
                                <span class="badge" style="color: red"></span>
                                @enderror --}}
                            </td>
                            <td>
                                <input type="submit" class="btn btn-primary" value="Add category">
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
