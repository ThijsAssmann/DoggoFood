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
                                <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="100">
                            </td>
                            <td class="col-lg-2">
                                <p class="cartCenter">
                                    {{$cart->containsProduct[0]->name}}
                                </p>
                            </td>
                            <td class="col-lg-1">
                                <input type="number" class="form-control" name="amount" value="{{$cart->count}}">
                            </td>
                            <td>
                                <p class="cartCenter">
                                    &euro;{{$cart->totalPrice}}
                                </p>
                            </td>
                            <td>
                                {{ Form::open(['id' => 'update','method' => 'UPDATE', 'route' => ['cart_destroy', $cart->id], 'style' => 'display: inline-block;']) }}
                                {{ Form::submit('Aanpassen', ['class' => 'btn btn-raised btn-primary btn-doggofood cartDeleteCenter']) }}
                                {{ Form::close() }}

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
                        &euro;16,00
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
                        &euro;59,00
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-7">
                    <a href="#" class="btn btn-raised btn-primary">Bestellen</a>
                    <a href="#" class="btn btn-raised btn-danger">Annuleren</a>
                </div>
            </div>
        </div>
        @include('static.footer')
    </div>
@endsection
