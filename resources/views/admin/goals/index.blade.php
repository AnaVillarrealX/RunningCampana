@extends('layouts.main')
@section('contenido')

<main>
  <h1 class="presentacion">Administración de <strong>Carreras</strong></h1>
    <div class="row">
      <div class="d-flex card col-12">
        <article class="col-sm-6">
          <a href="{{route('goals.create')}}" class="btn btn-success"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
        </article>
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Fecha Modificación</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($goals as $goal)

                    <tr>
                        <td>
                            {{$goal->id}}
                        </td>
                        <td>
                            {{$goal->title}}
                        </td>
                        <td>
                            {{$goal->goal_date}}
                        </td>
                        	<td>{{$goal->updated_at}}
                        </td>
                        <td scope="row">

                            <a href="{{route('goals.show',['id' => $goal->id])}}"><i class="far fa-eye"></i></a>
                        </td>
                        <td scope="row">
                            <a href="{{route('goals.edit', ['id' => $goal->id])}}"><i class="far fa-edit"></i></a>
                        </td>
                        <td scope="row">

                            <a href="#"><i class="far fa-trash-alt"></i></a>
                        </td>
                        <td>{{$goal->updated_at}}</td>
                        </tr>
                    @endforeach
            </tbody>
        </table>
        {{-- <div>
            {{$usuarios->links()}}
        </div> --}}
      </div>
    </div>
  </main>

@endsection
