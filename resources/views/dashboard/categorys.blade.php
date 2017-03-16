@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Categorieën</h1>
       <div class="table-responsive">
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Naam</th>
                 <th>Omschrijving</th>
                 <th>Acties</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($categorys as $category)
               <tr>
                 <td>{{$category->id}}</td>
                 <td>{{$category->name}}</td>
                 <td>{{$category->desc}}</td>
                 <td>
                    <a class="btn btn-raised btn-warning btn-doggofood" href="#">Aanpassen</a>
                 </td>
               </tr>
               @endforeach
             </tbody>
           </table>
       </div>

       <h2 class="sub-header">Subcategorieën</h2>
       <div class="table-responsive">
           <table class="table table-striped">
             <thead>
               <tr>
                 <th>#</th>
                 <th>Naam</th>
                 <th>Omschrijving</th>
                 <th>Acties</th>
               </tr>
             </thead>
             <tbody>
               @foreach ($subcategorys as $subcategory)
               <tr>
                 <td>{{$subcategory->id}}</td>
                 <td>{{$subcategory->name}}</td>
                 <td>{{$subcategory->desc}}</td>
                 <td>
                    <a class="btn btn-raised btn-warning btn-doggofood" href="#">Aanpassen</a>
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
