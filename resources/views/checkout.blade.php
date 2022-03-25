@extends('layouts.app')
@section('content')
    <div class="cart-table-area section-padding-100">
        <form
        {{-- action="{{route('place-order')}}" --}}
         method="post">
            @csrf
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-lg-8">
                        <div class="checkout_details_area mt-50 clearfix">

                            <div class="cart-title">
                                <h2>Checkout</h2>
                            </div>

                            <div class="row">
                                <div class="col-12 mb-3">
                                    <input type="text" name="address" class="form-control mb-3" id="street_address"
                                           placeholder="Address" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <input type="text" name="town" class="form-control" id="city" placeholder="Town" value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" name="zip" class="form-control" id="zipCode" placeholder="Zip Code"
                                           value="">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number"  name="phone_number" class="form-control" id="phone_number" min="0"
                                           placeholder="Phone No" value="">
                                </div>
                                <div class="col-12 mb-3">
                                    <textarea name="comments" class="form-control w-100" id="comment" cols="30" rows="10"
                                              placeholder="Leave a comment about your order"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4">
                        <div class="cart-summary">
                            <h5>Cart Total</h5>
                            <ul class="summary-table">
                                <li><span>subtotal:</span> <span>${{$total}}</span></li>
                                <li><span>delivery:</span> <span>Free</span></li>
                                <li><span>total:</span> <span>${{$total}}</span></li>
                            </ul>

                            <div class="payment-method">
                                <!-- Cash on delivery -->
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="cod" checked>
                                    <label class="custom-control-label" for="cod">Cash on Delivery</label>
                                </div>
                            </div>

                            <div class="cart-btn mt-100">
                                <input type="submit" class="btn amado-btn w-100" value="Checkout"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
