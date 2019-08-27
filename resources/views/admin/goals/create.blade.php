@extends('layouts.main')
@section('contenido')

  <div id='product-container' class="container-fluid p-0">
      <section class="container pt-3 pb-3">
          <form class='form-group' method="POST" action="{{route('goals.store')}}" enctype="multipart/form-data" >
              @csrf
              <article class="row">
                  <section class="col-md-9 col-sm-6">
                      <article class="card-body p-2 pl-4">
                          <dt>Titulo</dt>
                          <h3 class="title mb-3"><input type="text" style="width: 100%;" name="title" id="name" value=""></h3>
                          <hr>
                          <dl cla ss="item-property">
                              <dt>Fecha</dt>
                              <dd><input type="date" class='form-control' name="goal_date" id="goal_date" value="value=»2019-08-01" step="1" min="2019-08-01" max="2025-01-31"></dd>
                          </dl>
                          <dl class="param param-feature">
                            {{--<dt>Género</dt>
                              {{--<dd>
                                  <select name="genre_id" id="genre_id">
                                      @foreach ($genres as $genre)
                                          <option value="{{$genre->id}}">{{$genre->name}}</option>
                                      @endforeach
                                  </select>
                              </dd>--}}
                          <dl class="param param-feature">
                          <hr>
                          <section class='container-fluid p-0'>
                              <a href="{{url()->previous()}}" class="btn btn-info btn-md">Volver</a>
                              <input type="submit" class="btn btn-primary btn-md" value="Crear">
                          </section>
                      </article>
                  </section>

              </article>
          </form>
          @if ($errors->any())
          <div class="container alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif
      </section>
  </div>
@endsection
