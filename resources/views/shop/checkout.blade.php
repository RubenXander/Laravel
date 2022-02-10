@extends('layouts.master')

@section('title')
    Stonks Pizza
@endsection
@section('content')
    <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
        <h1>Checkout</h1>
        <h4>Your Total: € {{ $total }}</h4>
        <form action="{{route('checkout')}}" method="post" id="checkout-form">
            @csrf
           <div class="row">
               <input name="status" id="status" type="hidden" value="Besteld">
           </div>
            <button type="submit" class="btn btn-success">By now</button>
        </form>
    </div>
    </div>
@endsection
