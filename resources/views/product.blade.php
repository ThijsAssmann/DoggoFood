@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="top_margin_prod row">
            <br>
        </div>
        <div class="row">
            <div class="col-lg-2">
            <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="150" height="150">
            </div>
            <div class="prod_title_desc col-lg-3">
                <h2>{{$product->name}}</h2>
                <p>{{$product->desc}}</p><br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1 col-lg-offset-2"><p>Prijs</p>{{$product->price}}</div>
            <div class="dropdown_margin col-lg-1">
                <select id="Amount" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <div class="shoppingcart_button_margin"><a href="#" class="btn btn-raised btn-primary">Voeg toe aan  <i class="material-icons">add_shopping_cart</i></a></div>
            </div>
        </div>
        <br><br>
        @include('static.footer')
    </div>
@endsection
