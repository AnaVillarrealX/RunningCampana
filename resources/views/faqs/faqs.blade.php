@include('partials.head')
@include('partials.navbar')
<div class="container">
  <main>
    <h2> Preguntas frecuentes </h2>
    <br>
<div class="accordion" id="accordionExample">
<div class="card">
  <div class="card-header" id="headingOne">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Nunca he corrido en mi vida, estoy en condiciones de comenzar a entrenar con Runners Campana?
      </button>
    </h2>
  </div>
  <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
    <div class="card-body">
      Claro que sí, Runners Campana admite personas de cualquier sexo, edad y estado físico. Cada runner tiene un plan de entrenamiento con objetivos individuales.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingTwo">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Cuántos km tendré que correr durante mi primer entrenamiento con Runners Campana?
      </button>
    </h2>
  </div>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
    <div class="card-body">
      Probablemente no debas correr más de 2 km, al ritmo que te permita tu corazón.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingThree">
    <h2 class="mb-0 ">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Qué debo llevar para mi primer entrenamiento con Runners Campana?
      </button>
    </h2>
  </div>
  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
    <div class="card-body">
      Sólo es necesario llevar ropa y calzado deportivo. A medida que se avance en el entrenamiento, se definirá el calzado más adecuado a las necesidades y la mejor forma de hidratación.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingFour">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Existe la opción de entrenar a distancia con Runners Campana?
      </button>
    </h2>
  </div>
  <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
    <div class="card-body">
      Sí, existe la opción de disponer de un plan personalizado y seguimiento vía WhatSapp y portal web. De todos modos, es recomendable asistir de manera presencial con una frecuencia preacordada con el profesor.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingFive">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Es obligatorio usar un reloj con GPS?
      </button>
    </h2>
  </div>
  <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
    <div class="card-body">
      A partir de cierto nivel tu propia ambición va a pedirte un reloj para medir tu evolución. De todos modos, no es mandatario.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingSix">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Debo llevar apto médico desde el primer entrenamiento con Runners Campana?
      </button>
    </h2>
  </div>
  <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
    <div class="card-body">
      Lo ideal sería traer el certificado de aptitud médica firmado por un cardiólogo y una ergometría realizados hasta 6 meses antes de comenzar a entrenar.
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingSeven">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
        Cuánto dura cada sesión de entrenamiento?
      </button>
    </h2>
  </div>
  <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
    <div class="card-body">
      Por lo general, y excepto casos puntuales dependiendo de los objetivos de cada uno, cada sesión de entrenamiento está dividida en las fases: técnica de carrera (10 min), entrada en calor (15 min), entrenamiento propiamente dicho (30 min), afloje (5 min) y estiramiento (10 min).
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header" id="headingEight">
    <h2 class="mb-0">
      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
        Es obligatoria la asistencia los fines de semana?
      </button>
    </h2>
  </div>
  <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
    <div class="card-body">
      No es obligatoria pero sí es recomendable participar de los "fondos de los domingos" a medida que se vaya avanzando en el entreamiento ya que durante domingos y feriados hay más tiempo para entrenar el ritmo de larga distancia.
    </div>
  </div>
</div>
</div>
</main>
  </div>
@include('partials.footer')
