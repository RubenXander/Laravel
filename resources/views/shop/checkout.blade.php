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
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="first_name">First Name</label>
                       <input type="text" id="first_name" name="first_name" class="form-control" required>
                   </div>
           </div>
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="last_name">Last Name</label>
                       <input type="text" id="last_name" name="last_name" class="form-control" required>
                   </div>
               </div>
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="addresd">Address</label>
                       <input type="text" id="address" name="address" class="form-control" required>
                   </div>
               </div>
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="phone">Phone number</label>
                       <input type="number" id="phone" name="phone" class="form-control" required>
                   </div>
               </div>
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="zipcode">Zip code</label>
                       <input type="text" id="zipcode" name="zipcode" class="form-control" required>
                   </div>
               </div>
               <div class="col-xs-12">
                   <div class="form-group">
                       <label for="city">City</label>
                       <input type="text" id="city" name="city" class="form-control" required>
                   </div>
               </div>
               <input name="status" id="status" type="hidden" value="Besteld">
           </div>
            <button type="submit" class="btn btn-success">By now</button>
        </form>
    </div>
    </div>
@endsection
