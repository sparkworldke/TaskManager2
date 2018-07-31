<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Projects;

use App\Department;

class ProjectController extends Controller
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
        $projects= Projects::all();
        return view('blade-scafolding.projects.main')->with('projects',$projects);


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blade-scafolding.projects.create')->with('departments',Department::all());
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
            #your Form Fields Here
            'name' =>'required',
            'desc' =>'required',
            'start_date' =>'required',
            'due_date' =>'required',
            'department_id' =>'required',
            'document' =>'required'

        ]) ;
        //to avoid Overwriting a file upload
        $document = $request->document;
        $document_new_name =time().$document->getClientOriginalName();

        //move File
        $document->move('uploads/',$document_new_name) ;
        // $document->move('uploads/',str_slug($document_new_name)) ;
        //save Data #table Fields Here
        //$slug = str_slug()
        //$project = new Projects;
        /*
         * Saving Data to DB
         *
           $project->name = $request->name;
                $project->desc = $request->desc;
                $project->start_date = $request->start_date;
                $project->due_date = $request->due_date;
                $project->department_id = $request->department_id;
                $project->status = $request->status;
                $project->save();
         *
         */

        $project = Projects::create([
                'name' =>$request->name,
                'desc' =>$request->desc,
                'start_date' =>$request->start_date,
                'due_date' =>$request->due_date,
                'department_id' =>$request->department_id,

                'document' =>'uploads/'.str_slug($document_new_name)

            ]

        );

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
        return view('blade-scafolding.projects.view', ['project' => Projects::findOrFail($id)]);
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
        $projects = Projects::find($id);

        return view('blade-scafolding.projects.edit')->with('project',$projects)->with('departments',Department::all());
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

        //
        //
        $project = Projects::find($id);
        //validate Data
        $this->validate($request,[
            #your Form Fields Here
            'name' =>'required',
            'desc' =>'required',
            'department_id' =>'required',


        ]) ;
//if there is a file
        if ($request->hasFile('document')){
            $document = $request->document;
            $document_new_name =time().$document->getClientOriginalName();

            //move File
            $document->move('uploads/',$document_new_name) ;

            $project->document= $document_new_name;
        }
        //no file
        $project->name = $request->name;
        $project->desc = $request->desc;
        $project->start_date = $request->start_date;
        $project->due_date = $request->due_date;
        $project->department_id = $request->department_id;


        $project->save();

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
        $project = Projects::find($id);
        $project -> delete();

        return redirect()->route('blade-scafolding.projects.main');
    }
}
