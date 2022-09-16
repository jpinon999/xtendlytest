@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <img src="{{ URL('images/tshirt.jpg') }}">
                        <div class="card">
                            <div class="card-header">Blue Tshirt</div>
                            <div class="card-body">
                                <p>Price: <strong>$200</strong></p>
                                <p>60% Polyester 40% Cotton
                                    200 GSM
                                    Men and women
                                    Sizes: XS to 2XL
                                    Prices posted are in wholesale price already
                                    Shirt to Go can be your T-shirt supplier for your printing business, clothing line, school events, uniforms, and more.
                                    We give discounts for bulk orders, 100pcs above!
                                </p>
                            </div>
                            <form action="{{ route('payment') }}" method="post">
                                @csrf
                                <input type="hidden" name="amount" value="200">
                                <button type="submit" class="btn btn-primary">Pay with Paypal</button>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
