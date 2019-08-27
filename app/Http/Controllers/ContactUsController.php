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
  $this->validate($request, [ 'name' => 'required', 'email' => 'required|email', 'message' => 'required' ]);
  ContactUS::create($request->all());

  Mail::send('email',
     array(
         'name' => $request->get('name'),
         'email' => $request->get('email'),
         'user_message' => $request->get('message')
     ), function($message)
 {
     $message->from('info.runningcampana@gmail.com');
     $message->to('info.runningcampana@gmail', 'Admin')->subject('Cloudways Feedback');
 });
  return back()->with('success', 'Gracias por contactarnos!');
}
}
