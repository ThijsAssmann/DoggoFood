@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                    <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                    <span class="breadcrumb-item active">Bestelling verzonden</span>
                    <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div>
            <h2>Bestelling verzonden</h2>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <blockquote>
                    <p class="lead text-primary">Uw bestelling is succesvol verzonden.</p>
                </blockquote>
                <br>
            </div>
        </div>
        @include('static.footer')
    </div>
@endsection
