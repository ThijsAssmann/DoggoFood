@extends('layouts.default')

@section('content')
    <div class="container">
        <div style=margin-top:90px>
            <h2>Contact</h2>
            <h4>Neem contact met ons op</h4>
            <br>
        </div>

        <div class="container">
            <div class="jumbotron">
            <div class="row">

                <div class="ccol-md-8 col-md-offset-2">

                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group label-floating">
                                <label for="name" class="control-label">Naam *</label>
                                <input type="text" class="form-control" id="name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group label-floating">
                                <label for="email" class="control-label">Email *</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group label-floating">
                                <label for="subject" class="control-label">Onderwerp *</label>
                                <input type="text" class="form-control" id="subject">
                            </div>
                        </div>
                        <div class="serviceDropdown col-md-3">
                            <div class="form-group">
                                <select id="service" class="form-control">
                                  <!--  <option value="Service">Dienst *</option> -->
                                    <option value="Support">Ondersteuning</option>
                                    <option value="Complaint">Klacht</option>
                                    <option value="Other">Anders</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                        <div class="form-group label-floating">
                            <label for="message" class="control-label">Bericht *</label>
                            <textarea id="message" class="form-control"></textarea>
                        </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2"><button class="btn btn-raised btn-primary">Bericht versturen</button></div>
                    </div>
                </div>
            </div>
        </div>
        @include('static.footer')
    </div>
    </div>
@endsection
