<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Training_Session;

class TrainingSessionController extends Controller {
    public function index() {
        $idUsuarioLog=(Auth::User()->id);
        $entrenamientos = Training_Session::select("SELECT * FROM training_sessions WHERE id='$idUsuarioLog'");
        return view('training_session.listadoEntrenamientos')->with('entrenamientos',$entrenamientos);
    }
}
