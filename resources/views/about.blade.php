@extends('layouts.default')

@section('content')
    <div class="main container">
        <div class="row">
            <div class="col-lg-12 bread">
                <nav class="breadcrumb">
                  <a class="breadcrumb-item" href="{{ Route('index') }}">Home</a> /
                  <span class="breadcrumb-item active">Over ons</span>
                  <a href="{{ URL::previous() }}" class="pull-right">< Terug</a>
                </nav>
            </div>
        </div>
        <div>
            <h2>Over ons</h2>
            <br>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <blockquote>
                        <p class="lead text-primary">DoggoFood heeft een groot assortiment aan gezonde natuurlijk, gedroogde hondensnacks voor alle hondenrassen. Deze snacks zijn een goede keuze en geef je als beloning, trainer, bijvoeding en gebitsverzorging. Gedroogde snacks zijn heel lang houdbaar mits ze droog en goed afgesloten bewaard worden.</p>
                </blockquote>
                <br>
            </div>
        </div>
        @include('static.footer')
    </div>
@endsection
