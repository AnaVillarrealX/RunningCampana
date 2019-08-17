<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
  /**
* Show the application dashboard.
*
* @return \Illuminate\Http\Response
*/
public function contactUS()
{
  return view('contact.contactUS');
}
/**
 * Show the application dashboard.
 *
 * @return \Illuminate\Http\Response
 */
public function contactUSPost(Request $request)
{
    $this->validate($request, [
     'contacto' => 'required',
     'email' => 'required|email',
     'message' => 'required'
     ]);
    ContactUS::create($request->all());
    return back()->with('success', 'Gracias por contactarnos!!');
}
}
