@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Administración de <strong>Usuarios</strong></h1>
    <a href="{{ route('register') }}"> Agregar usuario </a>
    <div class="row">
      <div class="d-flex card col-12">
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Ver</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($usuarios as $usuario)

                    <tr>
                        <td>
                            {{$usuario->id}}
                        </td>
                        <td>
                            {{$usuario->first_name}}
                        </td>
                        <td>
                            {{$usuario->last_name}}
                        </td>
                        <td scope="row">
                            <a href="{{route('users.show',['id' => $usuario->id])}}"><i class="far fa-eye"></i></a>
                        </td>
                        <td scope="row">
                            <a href="{{route('users.edit', ['id' => $usuario->id])}}"><i class="far fa-edit"></i></a>
                        </td>
                        <td scope="row">
                            <a href="{{route('users.destroy',['id' => $usuario->id])}}"><i class="far fa-trash-alt"></i></a>
                        </td>
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
