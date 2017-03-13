@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Producten</h1>

       <h2 class="sub-header">Producten</h2>
       <div>
           {{ Form::open(array('action' => 'AdminProductsController@post', 'method' => 'POST')) }}
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
               <th>Category</th>
               <th>Subcategory</th>
               <th>Actions</th>
             </tr>
           </thead>
           <tbody>
             @foreach ($products as $product)
             <tr>
               <td>{{$product->id}}</td>
               <td>{{$product->name}}</td>
               <td>{{$product->price}}</td>
               <td>{{$product->sales_price}}</td>
               <td>{{$product->weight}} {{$product->weight_unit}}</td>
               <td>{{$product->stock}}</td>
               <td>
                   {{$product->cat}}
               </td>
               <td>
                   {{$product->subcat}}
               </td>
               <td>
                   <a class="btn btn-raised btn-primary btn-doggofood" href="{{ URL::to('product/' . $product->id) }}">Bekijken</a>
                   <a class="btn btn-raised btn-warning btn-doggofood" href="product/{{$product->id}}">Aanpassen</a>
                   {{ Form::open(['id' => 'delete','method' => 'DELETE', 'route' => ['destroy', $product->id], 'style' => 'display: inline-block;']) }}
                       {{ Form::submit('Verwijderen', ['class' => 'btn btn-raised btn-danger btn-doggofood']) }}
                   {{ Form::close() }}
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
