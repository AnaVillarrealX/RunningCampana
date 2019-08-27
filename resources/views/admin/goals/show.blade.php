@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Datos de Carrera</h2>
      <div class="d-flex card col-12">
        Titulo: {{$goal->title}}
        <br>
        Fecha: {{$goal->goal_date}}
        <br>
        <a href="{{route('goals.index')}}">Volver</a>
      </div>
</main>

@endsection
