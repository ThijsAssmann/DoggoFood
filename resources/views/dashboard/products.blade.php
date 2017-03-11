@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Producten</h1>

       <h2 class="sub-header">Producten</h2>
       <div>
           {{ Form::open(array('action' => 'AdminProductController@post', 'method' => 'POST')) }}
               {!! Form::select('category',['*'=>'Alles',1 => 'Brokken',2 => 'Snacks',3 => 'Training'], Session::get('category'), array('onchange' => 'submit()','class' => 'fakeinput form-control') ) !!}
           {{ Form::close() }}
       </div>
       <div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>#</th>
               <th>Naam</th>
               <th>Prijs</th>
               <th>Kortingsprijs</th>
               <th>Gewicht</th>
               <th>Aantal</th>
               <th>Subcategory</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody>
             @foreach ($products as $product)
             <tr>
               <td>{{$product->id}}</td>
               <td>{{$product->prod_name}}</td>
               <td>{{$product->prod_price}}</td>
               <td>{{$product->prod_sales_price}}</td>
               <td>{{$product->prod_weight}} {{$product->prod_weight_unit}}</td>
               <td>{{$product->prod_stock}}</td>
               <td>
                   {{$product->prod_subcat}}
               </td>
               <td>
                   <button class="btn-raised btn-primary">Bekijken<div class="ripple-container"></div></button>
                   <button class="btn-raised btn-warning">Aanpassen<div class="ripple-container"></div></button>
                   <button class="btn-raised btn-danger">Verwijderen<div class="ripple-container"></div></button>
               </td>
             </tr>
             @endforeach
           </tbody>
         </table>
       </div>
     </div>
   </div>
 </div>

@endsection
