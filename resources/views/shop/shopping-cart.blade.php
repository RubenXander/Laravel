@extends('layouts.master')

@section('title')
    Stonks Pizza
@endsection
@section('content')
    @if(Session::has('cart'))
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($pizzas as $pizza)
                         <li class="list-group-item">
                             <span class="badge">{{$pizza['qty']}}</span>
                             <strong>{{$pizza['pizza']['pizza']}}</strong>
                              <span class="label label-success"> € {{$pizza['price']}}</span>
                             <div class="btn-group">
                                 <button type="button" href="{{route('pizza.reduceByOne', ['id' => $pizza['pizza']['id']])}}" class="btn btn-primary btn-xs dropdown-toggle"
                                         data-toggle="dropdown">Remove<span class="caret"></span></button>
                                 <ul class="dropdown-menu">
                                     <li><a href="{{route('pizza.reduceByOne', ['id' => $pizza['pizza']['id']])}}"></a>Remove by 1</li>
                                     <li><a href="{{route('pizza.remove', ['id' => $pizza['pizza']['id']])}}"></a>Remove All</li>
                                 </ul>
                             </div>
                         </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: € {{ $totalPrice }} </strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                 <a href="{{route('checkout')}}" type="button" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>No items in Cart!</h2>
            </div>
        </div>
    @endif
@endsection
