@extends('layouts.main')
@section('contenido')
 <div id='product-container' class="container-fluid p-0">
     <section class="container pt-3 pb-3">
         <form class='form-group' method="POST" action="{{route('goals.update',['id' => $goal->id])}}" enctype="multipart/form-data" >
             @method('PUT')
             @csrf
             <article class="row">
                 <section class="col-md-9 col-sm-6">
                     <article class="card-body p-2 pl-4">
                         <dl class="item-property">
                             <dt>Carrera</dt>
                             <dd><input type="text" class='form-control' name="description" id="description" value="{{$goal->goal_date}}"></dd>
                         </dl>
                         <dl class="param param-feature">
                             <dt>Fecha</dt>
                             <dd><input type="date" class='form-control' name="description" id="date" value="{{$goal->goal_date}}"></dd>
                         </dl>
                         <div class='container-fluid p-0'>
                             <a href="{{route('goals.index')}}" class="btn btn-info btn-md">Volver</a>
                             <input type="submit" class="btn btn-primary btn-md" value="Actualizar">
                         </div>
                     </article>
                 </section>
             </article>
         </form>
         @if ($errors->any())
         <div class="container alert alert-danger">
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{ $error }}</li>
                 @endforeach
             </ul>
         </div>
     @endif
     </section>
 </div>
@endsection
