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
                    @foreach ($orders as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->town}}</td>
                        <td>{{$order->zip}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->user_id}}</td>
                        <td>{{$order->order_status}}</td>
                        <td>{{$order->cart}}</td>
                        <td>{{$order->total}}</td>
                        <td>{{$order->comments}}</td>
                        <td>
                            <form action="{{route('admin.orders.edit', $order)}}" method="get">
                                @csrf
                                @method('get')
                                <input type="submit" class="btn btn-success" value="Edit">
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
