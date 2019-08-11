@extends('layouts.main')
@section('contenido')

<main>
    <h1 class="presentacion">Listado carreras</h1>
    <div class="row">
      <div class="d-flex card col-12">
        <table class="table" >
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Ver</th>
                </tr>
            </thead>
            <tbody>
                    @foreach ($carreras as $carrera)
                    <tr>
                      <td>
                          {{$carrera->id}}
                      </td>
                      <td>
                          {{$carrera->title}}
                      </td>
                      <td>
                          {{$carrera->goal_date}}
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
