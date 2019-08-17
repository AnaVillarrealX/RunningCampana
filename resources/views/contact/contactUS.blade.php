@extends('layouts.main')
@section('contenido')

  <div class="container">
  <h1>Contactenos!!!</h1>

  <form class="" action="{{ route('contactUS') }}" method="post">
    @csrf
    <div class="form-group">
      <label for="">Nombre</label>
      <input type="text" name="contacto" value="">
    </div>

    <div class="form-group">
      <label for="">Email</label>
      <input type="email" name="email" value="">
    </div>

    <div class="form-group">
      <label for="">Mensaje</label>
      <textarea class="form-control" name="message" rows="8" cols="80">
      </textarea>
    </div>

    <button type="submit" name="btn btn-primary">Enviar</button>

  </form>
  </div>

@endsection
