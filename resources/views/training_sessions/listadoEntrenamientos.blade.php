@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Listado entrenamientos</h1>
    <div class="row">
      <div class="d-flex card col-12">
        @if(isset(Auth::User))
          <table class="table" >
              <thead>
                  <tr>
                      <th scope="col">Id</th>
                      <th scope="col">Sesión de entrenamiento</th>
                      <th scope="col">Fecha de entrenamiento</th>
                  </tr>
              </thead>
              <tbody>
                      @foreach ($entrenamientos as $entrenamiento)
                      <tr>
                        <td>
                            {{$entrenamiento->id}}
                        </td>
                        <td>
                            {{$entrenamiento->description}}
                        </td>
                        <td>
                            {{$entrenamiento->date}}
                        </td>
                      </tr>
                      @endforeach
              </tbody>
          </table>
        @else
        <h1> Debe estar logueado para ver sus sesiones de entrenamiento </h1>
        @endif
        // {{-- <div>
        //     {{$usuarios->links()}}
        // </div> --}}
      </div>
    </div>
  </main>

@endsection
