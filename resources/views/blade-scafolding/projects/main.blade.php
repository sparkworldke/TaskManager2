@extends('blade-scafolding.layout.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">All Projects</h4>
                    <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                    <span class="pull-right"><a class="pull-right btn  btn-rounded btn-success"  href="{{route('blade-scafolding.projects.create')}}">Create Project</a></span>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Department Assigned</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>

                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Project Name</th>
                                <th>Project Description</th>
                                <th>Department Assigned</th>
                                <th>Start Date</th>
                                <th>Due Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @if($projects->count() >0)
                                @foreach ($projects as $project)
                                    <tr>
                                        <td width="20%">{{ $project ->name }}</td>
                                        <td width="40%">{{ $project ->desc }}</td>
                                        <td width="40%">




                                            {{ $project ->department_id }}</td>
                                        <td width="40%">{{ $project ->start_date }}</td>
                                        <td width="40%">{{ $project ->due_date }}</td>
                                        <td width="20%">
                                            @if ($project ->status == 1)
                                                <span class="label label-success">Ongoing</span>
                                            @elseif ($project ->status == 2)
                                                <span class="label label-danger">Completed</span>
                                            @else
                                                <span class="label label-info">New & Assigned</span>
                                            @endif
                                        </td>
                                        <td width="20%">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    Action
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="{{route('blade-scafolding.projects.view', ['id' => $project->id])}}">View Project</a>
                                                    <a class="dropdown-item" href="{{route('blade-scafolding.projects.view', ['id' => $project->id])}}">Assign Tasks</a>
                                                    <a class="dropdown-item" href="{{route('blade-scafolding.projects.edit', ['id' => $project->id])}}">Edit</a>
                                                    <a class="dropdown-item" href="{{route('blade-scafolding.projects.delete', ['id' => $project->id])}}" onclick="return confirm('Are you sure you wish to Delete?');">Delete</a>

                                                </div>
                                            </div>


                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                No Projects
                            @endif





                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>
    </div>


@endsection