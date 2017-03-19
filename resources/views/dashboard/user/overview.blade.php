@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Gebruikers</h1>
       <div class="table-responsive">
         <table class="table table-striped">
           <thead>
             <tr>
               <th>#</th>
               <th>Naam</th>
               <th>Email</th>
               <th>Admin</th>
               <th>Acties</th>
             </tr>
           </thead>
           <tbody>
             @foreach ($users as $user)
             <tr>
               <td>{{$user->id}}</td>
               <td>{{$user->name}}</td>
               <td>{{$user->email}}</td>
               <td>{{$user->admin}}</td>
               <td>
                   <a class="btn btn-raised btn-primary btn-doggofood" href="#">Bestellingen</a>
                   <a class="btn btn-raised btn-warning btn-doggofood" href="{{ URL::to('dashboard/user/edit/' . $user->id) }}">Aanpassen</a>
                   {{ Form::open(['id' => 'delete','method' => 'DELETE', 'route' => ['destroy', $user->id], 'style' => 'display: inline-block;']) }}
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
