<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Goal;

class UserController extends Controller {

  public function check(Request $request)
  {
      $user = User::find($request->id)->get();
      return $user;
  }

  public function show()
  {
     return view('profile');
  }
}
