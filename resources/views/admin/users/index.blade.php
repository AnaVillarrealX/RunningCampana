
@extends('layouts.main')

@section('contenido')
<div class="container-fluid p-0">
	<section class="table-wrapper m-0">
		<article class="table-title">
			<section class="row">
				<div class="col-sm-6">
					<h2>Administración de <strong>Usuarios</strong></h2>
				</div>
			</section>
		</article>
		<table id='table' class="table table-striped table-hover  w-100">
			<thead class='w-100'>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Fecha Creacion</th>
					<th>Fecha Modificación</th>
					<th>Acciones</th>
				</tr>
			</thead>
			<tbody class='w-100'>
				@foreach ($users as $user)
				<tr>
					<td><a href="{{route('users.show',['id' => $user->id])}}">{{$user->first_name}}</a></td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at}}</td>
					<td>{{$user->updated_at}}</td>
					<td class=d-flex>
						<a href="{{route('users.edit', ['id' => $user->id])}}" class="edit"><i class="far fa-edit"></i></a>
						<form id='{{$user->id}}' class='form-delete' action="{{route('users.destroy',['id' => $user->id])}}" method="post">
							@method('DELETE')
							@csrf
							<button id='delete-link-{{$user->id}}' href="#" class="delete"><i class="far fa-trash-alt"></i></button>
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</section>
</div>
@endsection
