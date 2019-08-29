@extends('layouts.main')
@section('contenido')

<main>
    <div class="container">
      <section class="row">
        <div class="col-sm-6">
          <h2>Administración de <strong>Carreras</strong></h2>
        </div>
      </section>
      <div class="row">
        <article class="col-sm-6">
          <a href="{{route('goals.create')}}" class="btn btn-info"><i class="material-icons">&#xE147;</i> <span>Agregar</span></a>
        </article>
        <table class="table table-striped table-hover  w-100" >
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
                          <form id='{{$goal->id}}' class='form-delete' action="{{route('goals.destroy',['id' => $goal->id])}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button id='delete-link-{{$goal->id}}' href="#" class="delete"><i class="far fa-trash-alt"></i></button>
                          </form>
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
    <script src="{{asset('js/indexusersgoals.js')}}"></script>
  </main>

@endsection
