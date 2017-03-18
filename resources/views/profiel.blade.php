@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                  <span class="breadcrumb-item active">Mijn profiel</span>
                  <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div>
            <h2>Mijn profiel</h2>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br>
        </div>

        <div class="container">
            <div class="jumbotron">
            <div class="row">

                {!! Form::open(array('action' => 'UserController@update','class' => 'nobottommargin', 'method' => 'post')) !!}
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
                                    <input class="form-control" id="route" name="street" readonly="readonly" value="{{$user->street}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="street_number" class="control-label">Huisnummer</label>
                                    <input class="form-control" id="street_number" name="street_number" readonly="readonly" value="{{$user->street_number}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="administrative_area_level_1" class="control-label">Provincie</label>
                                    <input class="form-control" id="administrative_area_level_1" name="state" readonly="readonly" value="{{$user->state}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="postal_code" class="control-label">Postcode</label>
                                    <input class="form-control" id="postal_code" name="zipcode" readonly="readonly" value="{{$user->zipcode}}"></input>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="locality" class="control-label">Stad</label>
                                    <input class="form-control" id="locality" name="city" readonly="readonly" value="{{$user->city}}"></input>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group label-floating">
                                    <label for="country" class="control-label">Land</label>
                                    <input class="form-control" id="country" name="country" readonly="readonly" value="{{$user->country}}"></input>
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
