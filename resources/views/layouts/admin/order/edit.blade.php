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
                        <th scope="col">User Name</th>
                        <th scope="col">User Email</th>
                        <th scope="col">address</th>
                        <th scope="col">town</th>
                        <th scope="col">zip</th>
                        <th scope="col">phone</th>
                        <th scope="col">user ID</th>
                        <th scope="col">status</th>
                        <th scope="col">cart</th>
                        <th scope="col">total</th>
                        <th scope="col">comments</th>
                        <th scope="col">edit</th>

                    </tr>
                </thead>
                <tbody>
                    <form action="{{route('admin.orders.update', $order)}}" method="POST">
                        @csrf
                        @method('put')
                        <tr>
                            <td>
                                <input type="text" name="name" class="form-control" value="{{$order->name}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="email" name="email" class="form-control" value="{{$order->email}}" readonly>
                                @error('email')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="address" class="form-control" value="{{$order->address}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="town" class="form-control" value="{{$order->town}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="zip" class="form-control" value="{{$order->zip}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="phone" class="form-control" value="{{$order->phone}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="user_id" class="form-control" value="{{$order->user_id}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="order_status" class="form-control" value="{{$order->order_status}}" required>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                        </select>
                            </td>
                            <td>
                                <input type="text" name="cart" class="form-control" value="{{$order->cart}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="total" class="form-control" value="{{$order->total}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="text" name="comments" class="form-control" value="{{$order->comments}}" readonly>
                                @error('name')
                                <span class="badge" style="color: red">{{$message}}</span>
                                @enderror
                            </td>
                            <td>
                                <input type="submit" class="btn btn-success" value="Edit order">
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
