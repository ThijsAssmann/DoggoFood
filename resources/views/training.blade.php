@extends('layouts.default')

@section('content')
    <div class="container">
        <div class="row" style=margin-top:90px>
            <h2>Training</h2>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-12"><blockquote>
                    <p class="lead text-primary">Het kan soms moeilijk zijn om een snack te vinden die u aan uw huisdier kan geven tijdens het trainen. Hier bij DoggoFood willen wij een goed assortiment
                   dingesen zodat uw een goed en goedkopen snack aan uw huisdier kan geven ter beloning </p></blockquote> <br>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
                <h2>Training1</h2>
                <p>10-25 stuks.<br>Prijs: &euro;7,99-&euro;12,99</p></div>
            <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
                <h2>Training2</h2>
                <p>5-10 stuks<br>Prijs: &euro;3,99-&euro;6,99</p></div>
            <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
                <h2>Training3</h2>
                <p>10-25 stuks<br>Prijs: &euro;9,99-17,99</p></div>
        </div>
        <br><br>
        @include('static.footer')
    </div>
@endsection
