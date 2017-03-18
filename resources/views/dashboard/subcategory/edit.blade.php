@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Subcategorie</h1>
           <div class="container">
               <div class="jumbotron">
                   {{-- HTML::ul($errors->all()) --}}
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
               <div class="row">
                    <form method="post" action="{{ URL::to('dashboard/subcategory/update/' . $subcategory->id) }}">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                        <div class="col-md-8 col-md-offset-2">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group label-floating">
                                       <label for="name" class="control-label">Naam</label>
                                       <input type="text" class="form-control" id="name" name="name" required="" value="{{$subcategory->name}}">
                                       <input type="text" class="form-control hidden" id="id" name="id" required="" value="{{$subcategory->id}}" readonly="">
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group label-floating">
                                       <label for="desc" class="control-label">Omschrijving</label>
                                       <textarea id="desc" class="form-control" name="desc" required="">{{$subcategory->desc}}</textarea>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-2"><button class="btn btn-raised btn-primary">Aanpassen</button></div>
                           </div>
                       </div>
                    </form>
               </div>
           </div>
           @include('static.footer')
       </div>
     </div>
   </div>
 </div>

@endsection
