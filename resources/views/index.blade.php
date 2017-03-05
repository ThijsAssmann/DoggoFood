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
</div><!-- /.carousel -->

<div class="container marketing">
  <div class="row">
    <div class="col-lg-4">
      <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h2>Varkensoren</h2>
      <p>10-25 stuks.<br> Van deze heerlijke varkensoren gaat uw hond zeker knorren van blijdschap</p>
      <p><a class="btn btn-default" href="#" role="button">Bekijk details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h2>Gedroogde pens</h2>
      <p>10-25 stuks.<br> Deze geurloze paardenpens is een lekkere en gezonde snack voor iedere hond.</p>
      <p><a class="btn btn-default" href="#" role="button">Bekijk details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
      <img class="img-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="140" height="140">
      <h2>Zelfgemaakte koekjes</h2>
      <p>50-75 stuks <br>Onze zelfgemaakte hondenkoekjes zijn de perfecte manier om uw hond te laten zien dat je van ze houdt.</p>
      <p><a class="btn btn-default" href="#" role="button">Bekijk details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
  </div><!-- /.row -->

  @include('static.footer')

</div><!-- /.container -->

@endsection
