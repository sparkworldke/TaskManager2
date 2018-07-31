<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tasks;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //view Content
        //Show All Departments
        $tasks = Tasks::all();
        return view('blade-scafolding.tasks.main')->with('tasks',$tasks);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blade-scafolding.tasks.create');
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
        //validate Data
        $this->validate($request,[
            'name' =>'required',
            'desc' =>'required',
            'status' =>'required'
        ]) ;
        //save Data
        $tasks = new Tasks;

        $tasks->name = $request->name;
        $tasks->desc = $request->desc;
        $tasks->status = $request->status;

        $tasks->save();
        $tasks->session()->flash('success', 'Task was successful!');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return view('blade-scafolding.tasks.view', ['task' => Tasks::findOrFail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tasks = Tasks::find($id);

        return view('blade-scafolding.department.edit')->with('tasks',$tasks);
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
        //


        $tasks = Tasks::find($id);

        $tasks->name = $request->name;
        $tasks->desc = $request->desc;
        $tasks->status = $request->status;

        $tasks->save();

        $request->session()->flash('success', 'Task was successful!');
        return redirect()->route('blade-scafolding.tasks.main');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $tasks = Tasks::find($id);
        $tasks -> delete();

        return redirect()->route('blade-scafolding.tasks.main');
    }
}
