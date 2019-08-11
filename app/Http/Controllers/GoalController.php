<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Goals;

class GoalController extends Controller {
    public function index() {
        $carreras = Goal::all();
        return view('goals.listadoCarreras')->with('carreras',$carreras);
    }

}
