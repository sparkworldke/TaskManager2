<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//call  Class
use App\Department;

class DepartmentController extends Controller
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
         $departments = Department::all();
       return view('blade-scafolding.departments.main')->with('departments',$departments);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blade-scafolding.departments.create');
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
        $department = new Department;

        $department->name = $request->name;
        $department->desc = $request->desc;
        $department->status = $request->status;

        $department->save();
        $request->session()->flash('success', 'Task was successful!');
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
        return view('blade-scafolding.departments.view', ['department' => Department::findOrFail($id)]);
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
        $department = Department::find($id);

        return view('blade-scafolding.departments.edit')->with('department',$department);
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


        $department = Department::find($id);

        $department->name = $request->name;
        $department->desc = $request->desc;
        $department->status = $request->status;

        $department->save();

        $request->session()->flash('success', 'Task was successful!');
        //return redirect()->route('blade-scafolding.departments.main');
        return redirect()->back();
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
        $department = Department::find($id);
        $department -> delete();

        return redirect()->back();
    }
}
