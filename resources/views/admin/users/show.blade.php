@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Datos de Usuario</h2>
      <div class="d-flex card col-12">
        Nombre: {{$user->first_name}}
        <br>
        Apellido: {{$user->last_name}}
        <br>
        Género: {{$user->gender}}
        <br>
        Edad: {{$user->age}}
        <br>
        E-mail: {{$user->email}}
        <br>
        <a href="{{route('users.index')}}">Volver</a>
      </div>
</main>

@endsection
