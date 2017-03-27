@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Bestelling</h1>
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
                   <form method="post" action="{{ URL::to('dashboard/order/update/' . $order->id) }}">
                       {{ method_field('patch') }}
                       {{ csrf_field() }}
                           <div class="col-md-12">
                               <div class="form-group">
                                   <h4>Product: <strong>{{$product->name}}</strong></h4>
                               </div>
                               <div class="form-group hidden">
                                   <input type="number" class="form-control" id="order_id" name="order_id" required="" value="{{$order->id}}">
                               </div>
                               <div class="form-group">
                                   <label for="name" class="control-label">Totaal prijs</label>
                                   <input type="text" class="form-control" id="totalPrice" name="totalPrice" required="" value="{{$order->totalPrice}}">
                               </div>
                               <label for="count" class="control-label">Aantal</label>
                               {!! Form::select('count',['1'=>'1','2' => '2','3' => '3','4' => '4','5' => '5','6' => '6','7' => '7','8' => '8','9' => '9','10' => '10'], $order->count, array('onchange' => 'submit()','class' => 'fakeinput form-control') ) !!}
                           </div>
                       <div class="row">
                           <div class="col-md-2"><button class="btn btn-raised btn-primary">Aanpassen</button></div>
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
