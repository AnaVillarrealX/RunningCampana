<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FotosController extends Controller {
  public function entrenamientos() {
  return view('fotos.listadoFotosEntrenamientos');
  }
  public function carreras() {
  return view('fotos.listadoFotosCarreras');
  }
  public function historias() {
  return view('fotos.listadoFotosHistorias');
  }
}
