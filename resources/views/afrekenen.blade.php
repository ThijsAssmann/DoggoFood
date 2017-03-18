@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                  <span class="breadcrumb-item active">Afrekenen</span>
                  <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div>
            <h2>Afrekenen</h2>
            <br>
        </div>
        <div class="container">
            <hr>
            <div class="row">

            </div>
        </div>
        <hr>
        @include('static.footer')
    </div>
@endsection
