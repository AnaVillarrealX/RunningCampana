@extends('layouts.main')
@section('contenido')
  <div class="carrete">
    <h1> Nuestra galería de imágenes de entrenamientos </h1>
    <br>
    <div class="container">
      <button class="btn-primary listadoFotos" style="display:block">+fotos</button>
      <br>
       <img class="foto" src="img/fotosEntrenamientos/Entrenamiento_01.jpg" width="500px"/>
       <br>
       <p>La neblina no nos para</p>
       <img class="foto" src="img/fotosEntrenamientos/Entrenamiento_02.jpg" width="500px"/>
       <br>
       <p>A no olvidarse de la elongación</p>
       <img class="foto" src="img/fotosEntrenamientos/Entrenamiento_03.jpg" width="500px"/>
       <br>
       <p>Nos fuimos a entrenar con el semillero al norte</p>
       <img class="foto" src="img/fotosEntrenamientos/Entrenamiento_04.jpg" width="500px"/>
       <br>
       <p>Subidas y bajadas de puente</p>
  </div>
  <script src="js/script.js"></script>
</main>
@endsection
