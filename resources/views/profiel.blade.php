@extends('layouts.default')

@section('content')
    <div class="container">
        <div style=margin-top:90px>
            <h2>Mijn profiel</h2>
            <br>
        </div>

        <div class="container">
            <div class="jumbotron">
            <div class="row">

                {!! Form::open(array('action' => 'UserController@store','class' => 'nobottommargin', 'method' => 'post')) !!}
                    <div class="col-md-8 col-md-offset-2">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group label-floating">
                                    <div id="locationField">
                                      <label for="adres" class="control-label">Adres</label>
                                      <input id="autocomplete" placeholder="" class="form-control"
                                             onFocus="geolocate()" type="text"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="route" class="control-label">Straat </label>
                                    <input class="form-control" id="route" readonly="readonly" value="{{$user->street}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="street_number" class="control-label">Huisnummer</label>
                                    <input class="form-control" id="street_number" readonly="readonly" value="{{$user->street_number}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="administrative_area_level_1" class="control-label">Provincie</label>
                                    <input class="form-control" id="administrative_area_level_1" readonly="readonly" value="{{$user->state}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="postal_code" class="control-label">Postcode</label>
                                    <input class="form-control" id="postal_code" readonly="readonly" value="{{$user->zipcode}}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="locality" class="control-label">Stad</label>
                                    <input class="form-control" id="locality" readonly="readonly" value="{{$user->city}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="country" class="control-label">Land</label>
                                    <input class="form-control" id="country" readonly="readonly" value="{{$user->country}}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2"><button class="btn btn-raised btn-primary">Profiel aanpassen</button></div>
                        </div>
                    </div>
                {!! Form::close() !!}

            </div>
        </div>
        @include('static.footer')
    </div>
    </div>
@endsection
