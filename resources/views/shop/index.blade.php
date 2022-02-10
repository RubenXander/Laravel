@extends('layouts.master')

@section('title')
    Stonks Pizza
@endsection
@section('content')
    @if(Session::has('success'))
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
            <div id="charge-message" class="alert alert-success">
               {{Session::get('success')}}
            </div>
        </div>
    </div>
    @endif
    @foreach($pizzas->chunk(3) as $pizzaChunk)
        <div class="row">
            @foreach($pizzaChunk as $pizza)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="{{$pizza -> ImagePath}}" alt="pizza">
                        <div class="caption">
                            <h3>{{$pizza -> pizza}}</h3>
                            <p class="description">{{$pizza -> description}}</p>
                            <div class="clearfix">
                                <div class="pull-left price">€{{$pizza -> price}}</div>
                                <p><a href="{{route('pizza.addToCart', ['id' => $pizza ->id])}}" class="btn btn-success pull-right" role="button">Add to the Cart</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

    @endforeach

@endsection
