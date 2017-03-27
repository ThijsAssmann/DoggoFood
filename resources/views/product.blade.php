@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                  <a class="breadcrumb-item" href="{{URL::to('/category')}}/{{strtolower($product->cat)}}">{{$product->cat}}</a> /
                  <span class="breadcrumb-item active">Product</span>
                  <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <img class="img-rounded" src="{{ asset('../storage/app/'.$product->picture) }}" alt="Generic placeholder image" width="150" height="150">
            </div>
            <div class="prod_title_desc col-lg-8">
                <h2>{{$product->name}}</h2>
                <p>{{$product->desc}}</p><br>
            </div>
        </div>
        <div class="row">

            {!! Form::open(array('action' => 'CartController@store','class' => 'nobottommargin', 'method' => 'post')) !!}
                <div class="col-md-4 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <span>Prijs: {{str_replace(".", ",", $product->price)}} per {{$product->weight_unit}}</span>
                            </div>
                            <div class="form-group label-floating">
                                <label for="amount" class="control-label">Aantal</label>
                                <input type="number" class="form-control" id="amount" name="amount" required="" min="1" max="10">
                                <input type="number" class="form-control hidden" id="id" name="id" required="" value="{{$product->id}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="shoppingcart_button_margin">
                            <button class="btn btn-raised btn-primary">Voeg toe aan  <i class="material-icons">add_shopping_cart</i></button>
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
        <br><br>
        @include('static.footer')
    </div>
@endsection
