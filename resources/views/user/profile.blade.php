@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                            Status Bestelling:  {{$order-> status}}
                            </li>
                            <li class="list-group-item">
                                <button class="btn btn-primary btn-xs" href="">Cancel order</button>
                            </li>
                        </ul>
                    </div>
                    <div class="panel-footer">
                        <strong></strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
