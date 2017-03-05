@extends('layouts.default')

@section('content')
    <div class="container">
        <div style=margin-top:90px>
            <h2>Contact</h2>
            <h4>Neem contact met ons op</h4>
            @if(Session::has('success'))
                <h4>{!! Session::get('success') !!}</h2>
            @endif
            <br>
        </div>

        <div class="container">
            <div class="jumbotron">
            <div class="row">

                {!! Form::open(array('action' => 'ContactController@store','class' => 'nobottommargin', 'method' => 'post')) !!}
                <div class="col-md-8 col-md-offset-2">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group label-floating">
                                <label for="name" class="control-label">Naam *</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label for="email" class="control-label">Email *</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label for="subject" class="control-label">Onderwerp *</label>
                                <input type="text" class="form-control" id="subject" name="subject">
                            </div>
                        </div>
                        <div class="serviceDropdown col-md-3">
                            <div class="form-group">
                                <select id="service" class="form-control" name="service">
                                    <option value="Ondersteuning">Ondersteuning</option>
                                    <option value="Klacht">Klacht</option>
                                    <option value="Anders">Anders</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Bericht *</label>
                            <textarea id="message" class="form-control" name="message"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><button class="btn btn-raised btn-primary">Bericht versturen</button></div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
        @include('static.footer')
    </div>
    </div>
@endsection
