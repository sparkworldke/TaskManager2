@extends('blade-scafolding.layout.master')

    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Departments</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <span class="pull-right"><a class="pull-right btn  btn-rounded btn-success"  href="{{route('blade-scafolding.departments.create')}}">Create Department</a></span>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Department Description</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Department Name</th>
                                    <th>Department Description</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if($departments->count() >0)
                                    @foreach ($departments as $department)
                                        <tr>
                                            <td width="20%">{{ $department ->name }}</td>
                                            <td width="40%">{{ $department ->desc }}</td>
                                            <td width="20%">
                                                @if ($department ->status == 1)
                                                    <span class="label label-success">Active</span>
                                                @elseif ($department ->status == 0)
                                                    <span class="label label-danger">Disasbled</span>
                                                @else
                                                    No Status
                                                @endif
                                            </td>
                                            <td width="20%">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.departments.view', ['id' => $department->id])}}">View Department</a>
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.departments.edit', ['id' => $department->id])}}">Edit</a>
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.departments.delete', ['id' => $department->id])}}" onclick="return confirm('Are you sure you wish to Delete?');">Delete</a>

                                                    </div>
                                                </div>


                                            </td>
                                        </tr>
                                    @endforeach
                                @else

                                    No Departments
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>


        @endsection