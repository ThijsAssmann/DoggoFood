@extends('layouts.default')

@section('content')
<div class="main container">
    <div class="row">
        <div class="col-lg-12 bread">
            <nav class="breadcrumb">
              <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
              <span class="breadcrumb-item active">Zoeken</span>
              <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
            </nav>
        </div>
    </div>
    <div class="row">
        <h2>{{$products->total()}} product(en) gevonden</h2>
        <br>
    </div>
    <div class="row">
        @if (count($products) <= 0)
        <div class="bs-component">
            <div class="alert alert-dismissible alert-info">
                <strong>Helaas, er zijn geen producten gevonden.</strong>
            </div>
        <div id="source-button" class="btn btn-primary btn-xs" style="display: none;">&lt; &gt;</div></div>
        @endif
        @foreach($products as $product)

            <div class="col-lg-4">
                <a href="{{ Route('product', ['id' => $product->id]) }}">
                    <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
                    <h2>{{$product->name}}</h2>
                </a>
                <p>{{$product->weight}} {{$product->weight_unit}}<br>Prijs: &euro;{{str_replace(".", ",", $product->price)}}</p>
            </div>

        @endforeach

        <div class="col-lg-12">
            {{ $products->render() }}
        </div>
    </div>
    <br><br>
    @include('static.footer')
</div>
@endsection
