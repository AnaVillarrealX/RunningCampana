<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Goal;

class UserController extends Controller {
    public function index() {
//        $usuarios = User::all();
//      return view('users.listadoUsuarios')->with('usuarios',$usuarios);
    }

    public function show($id) {
  //      $detalle = User::find($id);
  //        return view('users.detalleUsuario')->with('detalle',$detalle);
    }

    public function save(Request $request){
        $reglas =[
            'first_name' => 'required',
            'last_name' => 'required',
            'gender' => 'required',
            'age' => 'required|numeric',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'email' => 'required|email|unique',
            'password' => 'required|min:6',
            'avatar' => 'image'
        ];

        $mensajes = [
            'required' => 'El campo :attribute es obligatorio',
            'unique' => 'El usuario ya existe',
            'numeric' => 'El campo :attribute debe ser numérico',
            'email' => 'Debe registrar un email válido',
            'min' => 'La contraseña debe tener como mínimo 6 caracteres',
            'image' => 'Debe subir una imagen .jpg o .png'
        ];

        $this->validate($request,$reglas,$mensajes);

        $nuevoUsuario = new User($request->all());
        $nuevoUsuario->save();
        return redirect('listadoUsuarios');
    }

}
