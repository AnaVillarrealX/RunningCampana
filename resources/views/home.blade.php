@extends('layouts.master')
@section('contenido')
  <div class="presentacion">
      <h1> Runners Campana </h1>
      <p> Somos corredores recreativos y profesionales. El grupo de entrenamiento tiene sede en el campito de Siderca (ciudad de Campana). Los entrenamientos están dirigidos según el nivel y objetivo de cada atleta desde los niveles iniciales hasta avanzados, trabajando sobre objetivos como son las carreras de calle, trail y montaña en variadas distancias (corta, mediana y larga). </p>
  </div>

  <div class="grupoSecciones">
    <article class="seccion">
      <img class= "imagenSeccion" src="img/man-running.png" alt="">
      <h3 class= "tituloSeccion">Entrenamiento</h3>
      <p> Para cumplir tus retos tienes que trabajar duro. Chequea las rutinas que el profe te va asignando. </p>
      <a class="ingresarSeccion" href="#"> Ingresar </a>
    </article>
    <article class="seccion">
      <img class= "imagenSeccion" src="img/woman-running.png" alt="">
      <h3 class= "tituloSeccion"> Carreras </h3>
      <p> Echa un vistazo a todas las carreras preparadas para vos. ¿Cuál será tu próximo reto? </p>
      <a class="ingresarSeccion" href="{{ route('listadoCarreras') }}"> Ingresar </a>
    </article>
    <article class="seccion">
      <img class= "imagenSeccion" src="img/both-running.png" alt="">
      <h3 class= "tituloSeccion"> Usuarios </h3>
      <p> Conoce a los runners que integran esta magnífica comunidad y desafíalos a superarte. </p>
      <a class="ingresarSeccion" href="#"> Ingresar </a>
    </article>
  </div>
  </main>
@endsection
