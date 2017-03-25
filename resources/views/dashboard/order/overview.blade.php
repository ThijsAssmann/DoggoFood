@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Bestellingen</h1>
       <div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>#</th>
               <th>User ID</th>
               <th>Product</th>
               <th>Aantal</th>
               <th>Totaal price</th>
               <th>Transactie ID</th>
               <th>Status</th>
               <th>Shipping ID</th>
               <th>Acties</th>
             </tr>
           </thead>
           <tbody>
             @foreach ($orders as $order)
             <tr>
               <td>{{$order->id}}</td>
               <td>{{$order->user_id}}</td>
               <td>{{$order->product_id}}</td>
               <td>{{$order->count}}</td>
               <td>{{$order->totalPrice}}</td>
               <td>{{$order->transaction_id}}</td>
               <td>{{$order->statusCode}}</td>
               <td>{{$order->shipping_id}}</td>
               <td>
                 {{ Form::open(['id' => 'delete','method' => 'DELETE', 'route' => ['order_destroy', $order->id], 'style' => 'display: inline-block;','onsubmit' => "return confirm('Record verwijderen?')"]) }}
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
