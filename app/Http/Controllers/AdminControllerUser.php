<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminControllerUser extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $usuarios = User::orderBy('last_name')->get();
      return view('admin.users.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $user = User::find($id);
      return view('admin.users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::find($id);
      return view('admin.users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        "first_name" => 'required',
        "last_name" => 'required',
        "avatar" => 'image|dimensions:min_width=580,max_width=610,min_height=390,max_height=410'
      ]);


      $user = User::find($id);

      $user->first_name = $request->input("first_name");
      $user->last_name = $request->input("last_name");

      $path = $request->file('avatar');

       if (!is_null($path)){
           $path->storeAs('public/storage', 'avatar'.$request->user()->id);
           $user->avatar = 'storage/avatars'.$request->user()->id;
      }

      $user->save();

      return redirect()->route('admin.users.show',['id' => $id]);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();

      return redirect()->route("admin.users.index");
    }
}
