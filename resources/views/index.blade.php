@extends('layouts.default')

@section('content')

<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
      <div class="container">
        <div class="carousel-caption">
          <h1>DoggoFood</h1>
          <p>DoggoFood heeft een groot assortiment aan gezonde natuurlijk, gedroogde hondensnacks voor alle hondenrassen. Deze snacks zijn een goede keuze en geef je als beloning, trainer, bijvoeding en gebitsverzorging. Gedroogde snacks zijn heel lang houdbaar mits ze droog en goed afgesloten bewaard worden.</p>
          <p><a class="btn btn-lg btn-primary" href="#" role="button">Bekijk assortiment</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container marketing">
  <div class="row">
      @foreach ($products as $product)
          <div class="col-lg-4">
            <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
            <h2>{{$product->name}}</h2>
            <p>{{$product->desc}}</p>
            <p><a class="btn btn-default" href="{{ URL::to('product/' . $product->id) }}" role="button">Bekijk details &raquo;</a></p>
          </div>
      @endforeach
  </div>

  @include('static.footer')

</div>

@endsection
