@extends('layouts.default')

@section('content')
<div class="container">
    <div class="row" style=margin-top:90px>
        <h2>Brokken</h2>
        <br>
    </div>
        <div class="row">
            <div class="col-lg-6"><blockquote>
                <p class="lead text-primary">In de winkel zijn veel verschillende hondenbrokken te koop. Toch is het vaak moeilijk om brokken te vinden waar je echt tevreden mee bent.
                    Hier bij DoggoFood vinden wij het belangrijk dat uw huisdier de juiste voeding krijgt. Groot, klein, jong of oud wij hebben wat uw huisdier nodig heeft.</p></blockquote> <br>
            </div>
        </div>
    <div class="row">
        <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
            <h2>Brokken1</h2>
            <p>5kg.<br>Prijs: &euro;7,99</p></div>
        <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
            <h2>Brokken2</h2>
            <p>10kg.<br>Prijs: &euro;12,99</p></div>
        <div class="col-lg-4"> <img class="img-rounded" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder image" width="200" height="200">
            <h2>Brokken3</h2>
            <p>20kg<br>Prijs: &euro;19,99</p></div>
    </div>
    <br><br>
    @include('static.footer')
</div>
@endsection
