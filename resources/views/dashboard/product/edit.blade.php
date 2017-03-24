@extends('layouts.default')

@section('content')

<div class="container-fluid">
   <div class="row">

     @include('dashboard.sidebar')

     <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
       <h1 class="page-header">Product</h1>
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
                    <form method="post" action="{{ URL::to('dashboard/product/update/' . $product->id) }}" enctype="multipart/form-data">
                    {{ method_field('patch') }}
                    {{ csrf_field() }}
                        <div class="col-md-8 col-md-offset-2">
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group label-floating">
                                       <label for="name" class="control-label">Naam</label>
                                       <input type="text" class="form-control" id="name" name="name" required="" value="{{$product->name}}">
                                       <input type="text" class="form-control hidden" id="id" name="id" required="" value="{{$product->id}}" readonly="">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group label-floating">
                                       <label for="weight" class="control-label">Gewicht</label>
                                       <input type="number" class="form-control" id="weight" name="weight" required="" value="{{$product->weight}}" step="0.01">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group label-floating">
                                       <label for="weight_unit" class="control-label">Gewicht unit</label>
                                       <input type="text" class="form-control" id="weight_unit" name="weight_unit" required="" value="{{$product->weight_unit}}">
                                   </div>
                               </div>
                               <div class="col-md-4">
                                   <div class="form-group label-floating">
                                       <label for="stock" class="control-label">Aantal</label>
                                       <input type="number" class="form-control" id="stock" name="stock" required="" value="{{$product->stock}}">
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-5">
                                   <div class="form-group label-floating">
                                       <label for="price" class="control-label">Prijs</label>
                                       <input type="number" class="form-control" id="price" name="price" required="" value="{{$product->price}}"  step="0.01">
                                   </div>
                               </div>
                               <div class="col-md-5">
                                   <div class="form-group label-floating">
                                       <label for="sales_price" class="control-label">Kortingsprijs</label>
                                       <input type="number" class="form-control" id="sales_price" name="sales_price" required="" value="{{$product->sales_price}}"  step="0.01">
                                   </div>
                               </div>
                               <div class="serviceDropdown col-md-4">
                                   <div class="form-group">
                                       <label for="cat" class="control-label">Categorie</label>
                                       <select id="cat" class="form-control" name="cat">
                                           @foreach ($categorys as $category)
                                            <option value="{{$category->name}}" {{ ($category->name == $product->cat) ? 'selected' : '' }}>{{$category->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                               </div>
                               <div class="serviceDropdown col-md-4">
                                   <div class="form-group">
                                       <label for="subcat" class="control-label">Subcategorie</label>
                                       <select id="subcat" class="form-control" name="subcat">
                                           @foreach ($subcategorys as $subcategory)
                                            <option value="{{$subcategory->name}}" {{ ($subcategory->name == $product->subcat) ? 'selected' : '' }}>{{$subcategory->name}}</option>
                                           @endforeach
                                       </select>
                                   </div>
                               </div>
                           </div>
                           <div class="row">
                               <div class="col-md-12">
                                   <div class="form-group label-floating">
                                       <label for="desc" class="control-label">Omschrijving</label>
                                       <textarea id="desc" class="form-control" name="desc" required="">{{$product->desc}}</textarea>
                                   </div>
                               </div>
                               <div class="col-md-12">
                                   <div class="form-group is-fileinput">
                                     <label class="control-label" for="picture">Afbeelding</label>
                                     <input id="picture" name="picture" type="file">
                                     <input readonly="" class="form-control" placeholder="Zoeken..." type="text">
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
