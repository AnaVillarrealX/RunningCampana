<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goal;

class AdminControllerGoal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $goals = Goal::orderBy('goal_date')->get();
      return view('admin.goals.index')->with('goals',$goals);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $goals = Goal::all();
      return view('admin.goals.create',compact('goals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $this->validate($request, [
        "title" => 'required|string',
        "goal_date"  => 'required|date',
    ]);

      $goal = new Goal([
        'title' => $request->input("title"),
        'goal_date' => $request->input("goal_date"),
        ]);

      $goal->save();

      return redirect()->route('goals.index',['id' => $goal->id]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $goal = Goal::find($id);
      return view('admin.goals.show')->with('goal',$goal);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $goal = Goal::find($id);
      return view('admin.goals.edit',compact('goal'));
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
        "title" => 'required|string',
        "goal_date"  => 'required|date',
    ]);

      $goal = Goal::find($id)([
      $goal->title = $request->input("title"),
      $goal->goal_date = $request->input("goal_date"),
        ]);

      $goal->save();

      return redirect()->route('goals.show',['id' => $goal->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($goal)
    {

      $goal = Goal::find($goal);
      $goal->delete();

      return redirect()->route("goals.index");
    }
}
