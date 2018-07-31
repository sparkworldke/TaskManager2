<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Employees;

use App\Department;

class EmployeesController extends Controller
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
        $employees= Employees::all();
        return view('blade-scafolding.employees.main')->with('employees',$employees);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blade-scafolding.employees.create')->with('departments',Department::all());
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
            'first_name' =>'required',
            'last_name' =>'required',
            'email' =>'required',
            'phone_number' =>'required',
            'skills' =>'required',
            'gender' =>'required',
            'department_id' =>'required',
            'profile_img' =>'required'

        ]) ;
        //to avoid Overwriting a file upload
        $profile_img = $request->profile_img;
        $profile_img_new_name =time().$profile_img->getClientOriginalName();
        //move File
        $profile_img->move('uploads/',$profile_img_new_name) ;
        //'document' =>'uploads/'.str_slug($document_new_name)

        //save Data
        $employee = new Employees();

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->department_id= $request->department_id;
        $employee->skills= $request->skills;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;
        $employee->profile_img = 'uploads/'.$profile_img_new_name;

        $employee->save();
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
        return view('blade-scafolding.employees.view', ['employee' => Employees::findOrFail($id)]);
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
        $employees = Employees::find($id);

        return view('blade-scafolding.employees.edit')->with('employee',$employees)->with('departments',Department::all());
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


        $employee = Employees::find($id);

        $employee->first_name = $request->first_name;
        $employee->last_name = $request->last_name;
        $employee->department_id= $request->department_id;
        $employee->skills= $request->skills;
        $employee->email = $request->email;
        $employee->phone_number = $request->phone_number;
        $employee->gender = $request->gender;


        $employee->save();

        $request->session()->flash('success', 'Task was successful!');
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
        $employee = Employees::find($id);
        $employee -> delete();

        return redirect()->back();
    }
}
