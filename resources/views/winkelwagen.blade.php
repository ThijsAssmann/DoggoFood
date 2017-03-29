@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                  <span class="breadcrumb-item active">Winkelwagen</span>
                  <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div>
            <h2>Winkelwagentje</h2>
        </div>
        @if (count($user->carts) >= 1)
            <div class="container">
                <div class="row">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Beschrijving</th>
                                <th>Aantal</th>
                                <th>Prijs</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($user->carts as $cart)
                            <tr>
                                <td class="col-lg-2">
                                    <img class="img-rounded" src="@if (strpos($cart->containsProduct[0]['picture'], 'http') !== false) {{ $cart->containsProduct[0]['picture'] }} @else {{ asset('../storage/app/'.$cart->containsProduct[0]['picture']) }} @endif" alt="Generic placeholder image" width="140" height="100">
                                </td>
                                <td class="col-lg-2">
                                    <p class="cartCenter">
                                        {{ $cart->containsProduct[0]['name'] }}
                                    </p>
                                </td>
                                <td class="col-lg-1">
                                    {{ Form::open(array('action' => 'CartController@update', 'method' => 'POST')) }}
                                        <div class="form-group hidden">
                                            <input type="number" class="form-control" id="cart_id" name="cart_id" required="" value="{{$cart->id}}">
                                            <input type="text" class="form-control" id="totalPrice" name="totalPrice" required="" value="{{$cart->totalPrice}}">
                                        </div>
                                        {!! Form::select('count',['1'=>'1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'], $cart->count, array('onchange' => 'submit()','class' => 'fakeinput form-control') ) !!}
                                    {{ Form::close() }}
                                </td>
                                <td>
                                    <p class="cartCenter">
                                        &euro;{{$cart->totalPrice}}
                                    </p>
                                </td>
                                <td>
                                    {{ Form::open(['id' => 'delete','method' => 'DELETE', 'route' => ['cart_destroy', $cart->id], 'style' => 'display: inline-block;']) }}
                                    {{ Form::submit('Verwijderen', ['class' => 'btn btn-raised btn-danger btn-doggofood cartDeleteCenter']) }}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-7">
                            Totaal artikelen
                        </div>
                        <div class="col-lg-1">
                           &euro;{{($cartInfo['price'])}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-7">
                            Verzendkosten
                        </div>
                        <div class="col-lg-1">
                            &euro;5,00
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2 col-lg-offset-7">
                            <b>
                                Totaal
                            </b>
                        </div>
                        <div class="col-lg-1">
                            &euro;{{($cartInfo['price']+5)}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-lg-offset-7">
                        {{ Form::open(['method' => 'post', 'route' => ['cart_order'], 'style' => 'display: inline-block;']) }}
                            <input type="number" class="form-control hidden" id="cart_id" name="cart_id" required="" value="{{$cart->id}}">
                            {{ Form::submit('Bestellen', ['class' => 'btn btn-raised btn-primary']) }}
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        @endif
        @include('static.footer')
    </div>
@endsection
