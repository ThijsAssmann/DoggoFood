@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="jumbotron text-center">
            <div class="container">
                <div class="content">
                    <img src="http://cozydogcrates.com/blog/wp-content/uploads/2013/03/Tears.jpg"/>
                    <div class="title">We zijn zo terug.</div>
                    <a href="{{ URL::previous() }}" class="btn btn-primary">Terug</a>
                </div>
            </div>
        </div>
        @include('static.footer')
    </div>
@endsection
