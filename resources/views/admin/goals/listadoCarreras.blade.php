@extends('layouts.main')
@section('contenido')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <div class="container-fluid p-0">
  	<section class="table-wrapper m-0">
  		<article class="table-title">
  			<section class="row">
  				<article class="col-sm-6">
  					<h2>Administración de <strong>Carreras</strong></h2>
  				</article>
  				<article class="col-sm-6">
  					<a href="{{route('crear')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
  				</article>
  			</section>
  		</article>
  		<table id='table' class="table table-striped table-hover  w-100">
  			<thead class='w-100'>
  				<tr>
  					<th>Titulo</th>
  					<th>Fecha</th>
  					<th>Fecha Modificación</th>
  					<th>Acciones</th>
  				</tr>
  			</thead>
  			<tbody class='w-100'>
  				@foreach ($goals as $goal)
  				<tr>
  					<td><a href="{{route('ver',['id' => $goal->id])}}">{{$goal->title}}<i class="far fa-eye"></i></a></td>
  					<td>{{$goal->date['goal_date']}}</td>
  					<td>{{$goal->updated_at}}</td>
  					<td class=d-flex>
  						<a href="{{route('edit', ['id' => $goal->id])}}" class="edit"><i class="material-icons" data-toggle="tooltip" title="Edit"><i class="far fa-edit"></i></a>
  						<form id='{{$goal->id}}' class='form-delete' action="{{route('delete',['id' => $goal->id])}}" method="post">
  							@method('DELETE')
  							@csrf
  							<a id='delete-link-{{$goal->id}}' href="#" class="delete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
  						</form>
  					</td>
  				</tr>
  				@endforeach
  			</tbody>
  		</table>
  	</section>
  </div>




























@endsection
