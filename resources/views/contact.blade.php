@extends('layouts.default')

@section('content')
    <div class="contactHeader container">
        <div>
            <h3>Contact</h3>
            <h4>Neem contact op met ons</h4>
            <br />
        </div>
        <form>
            <div class="inputs col-xs-2">
                <div class="form-group label-floating">
                    <label for="name" class="control-label">Naam *</label>
                    <input type="text" class="form-control" id="name">
                </div>
            </div>
        </form>
    </div>
@endsection