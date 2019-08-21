@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Datos de Usuario</h2>
      <div class="d-flex card col-12">
        Nombre: {{$detalle->first_name}}
        <br>
        Apellido: {{$detalle->last_name}}
        <br>
        Género: {{$detalle->gender}}
        <br>
        Edad: {{$detalle->age}}
        <br>
        E-mail: {{$detalle->email}}
        <br>
        <a href="{{ route('listadoUsuarios') }}">Volver</a>
      </div>
</main>

@endsection
