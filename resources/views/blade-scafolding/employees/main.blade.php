@extends('blade-scafolding.layout.master')

    @section('content')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Employees</h4>
                        <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                        <span class="pull-right"><a class="pull-right btn  btn-rounded btn-success"  href="{{route('blade-scafolding.employees.create')}}">Create Employee</a></span>
                        <div class="table-responsive m-t-40">
                            <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                <thead>
                                <tr>
                                    <th>Profile</th>
                                    <th>Names</th>
                                    <th>Gender</th>
                                    <th>Department</th>
                                    <th>Action</th>

                                </tr>
                                </thead>
                                <tfoot>
                                <tr>
                                    <th>Profile</th>
                                    <th>Names</th>
                                    <th>Gender</th>
                                    <th>Department</th>
                                    <th>Action</th>
                                </tr>
                                </tfoot>
                                <tbody>
                                @if($employees->count() >0)
                                    @foreach ($employees as $employee)
                                        <tr>
                                            <td width="40%"><img src="{{ $employee ->profile_img }}" width="100" height="100" class="img-circle img-responsive"></td>
                                            <td width="20%">{{ $employee ->first_name }} {{ $employee ->last_name }}</td>



                                            <td width="20%">
                                                @if ($employee ->gender == 1)
                                                    <span class="label label-success">Male</span>
                                                @elseif ($employee ->gender == 2)
                                                    <span class="label label-danger">Female</span>

                                                @endif
                                            </td>
                                            <td width="20%">
                                           {{ $employee ->department_id}}
                                            </td>
                                            <td width="20%">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        Action
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.employees.view', ['id' => $employee->id])}}">View Employee</a>
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.employees.edit', ['id' => $employee->id])}}">Edit</a>
                                                        <a class="dropdown-item" href="{{route('blade-scafolding.employees.delete', ['id' => $employee->id])}}" onclick="return confirm('Are you sure you wish to Delete?');">Delete</a>

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