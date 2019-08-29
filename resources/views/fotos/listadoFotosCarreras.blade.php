@extends('layouts.main')

<link rel="stylesheet" href="{{ asset('css/secciones.css') }}">

@section('contenido')
  <div class="container">
    <h1> Nuestra galería de imágenes de carreras </h1>
    <a href="listadoFotosEntrenamientos"> Volver a fotos de entrenamientos </a>
    <div class="carrete">
    </div>
    <button class="btn-primary" id="anterior">Anterior</button>
    <button class="btn-primary" id="siguiente">Siguiente</button>
  </div>
<script src="js/script.js"></script>
</main>
@endsection
